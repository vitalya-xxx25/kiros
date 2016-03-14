$(function() {
    var Engine = {
        showAjaxLoader: true,

        init : function() {
            this.initAjaxHandlers();
            this.initFlashMessages();
            this.initUiDefaults();
            this.initLocale();
            this.initGroupSorter();

            if (initEnv){
                this.iniEnv();
            }

            window.Engine = Engine;
        },

        initAjaxHandlers: function() {
            var showAjaxError = function(url, errorText) {
                var text = '<div>';
                text += "<p><b>URL:</b> " + url+ "</p>";
                text += "<p><b>Response:</b> " + errorText + "</p>";
                text += "</div>";

                var buttons = {};
                buttons[t('dialog.close')] = function() {
                    win.dialog('destroy');
                }

                var win = $(text).dialog({
                    title		: 'Internal Error',
                    width		: 500,
                    height		: 350,
                    autoResize	: true,
                    resizable	: true,
                    modal       : true,
                    buttons		: buttons
                });
            };
            var onError = function(xmlHttpRequest, textStatus, e) {
                if (xmlHttpRequest.readyState == 0 || xmlHttpRequest.status == 0 || !textStatus.responseText || textStatus.responseText.length == 0) {
                    return;
                }

                var response = jQuery.parseJSON(textStatus.responseText);
                if (!response) {
                    showAjaxError(xmlHttpRequest.target.URL, textStatus.responseText);
                } else {
                    this.showAlert(response.message);
                }
            };
            $(document).ajaxError($.proxy(onError, this));
        },

        tabs: function(el, options) {
            options = options || {};
            var current = window.location.hash && $(window.location.hash.replace('select-', '')).index() - 1;
            $.extend(options, {
                selected: current,
                active: current,
                select: function(event, ui) {
                    window.location.replace(ui.tab.hash);
                }
            });
            $(el).tabs(options);
        },

        initFlashMessages: function() {
            if (!keitaroData.flash) {
                return ;
            }
            if (keitaroData.flash['info']) {
                Engine.showNotice(keitaroData.flash['info']);
            }

            if (keitaroData.flash['error']) {
                Engine.showAlert(keitaroData.flash['error']);
            }
        },

        initUiDefaults: function() {
            if ($.fn.select2) {
                $.fn.select2.defaults.sortResults = function(results, container, query) {
                    if (query.term) {
                        return results.sort(function(a, b) {
                            if (a.text.indexOf(query.term.toLowerCase()) > b.text.indexOf(query.term.toLowerCase())) {
                                return 1;
                            } else if (a.text.length < b.text.length) {
                                return -1;
                            } else {
                                return 0;
                            }
                        });
                    }
                    return results;
                };
            }
            $.datepicker.setDefaults({
                showOn: 'both',
                buttonImageOnly: true,
                changeMonth : true,
                firstDay: 1,
                buttonImage: '../images/icons/silk/calendar.png'}
            );

            $.extend($.ui.dialog.defaults, {
                minHeight: 0
            });
        },

        initLocale: function() {

            if (keitaroData.language == 'ru') {
                $.datepicker.setDefaults({
                    buttonText: 'Календарь',
                    monthNames:  ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
                    dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
                    dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
                    dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                    dateFormat: 'dd.mm.yy'
                });
            }
        },

        iniEnv: function() {
            $('.ui-dialog-titlebar a').hover(function(){
                $(this).addClass('ui-state-hover');
            }, function(){
                $(this).removeClass('ui-state-hover');
            });

            $('#group-list').click(function(){
                Engine.redirect('?object=Groups.index');
            });

            $('#check-all').click(function(e){
                var status = $(e.target).is(':checked');
                $(e.target).parents('table').find('input').prop('checked', status);
            });

            if (status.length > 1) {
                var buttons = {};
                buttons[t('dialog.close')] = function() {
                    win.dialog('destroy');
                }

                var win = $('<div>' + status + '</div>').dialog({
                        title		: t('dialog.warning'),
                        width		: 400,
                        modal       : true,
                        autoResize	: true,
                        resizable	: true,
                        buttons		: buttons
                });
            }
        },

        showNotification: function(className, text) {
            var notification = $('<div class="notification">')
                .addClass(className)
                .text(text)
                .appendTo('body');

            notification.fadeIn();


            notification.click(function() {
                $(this).remove();
            });

            notification.delay(3000)
                .fadeOut('slow', function() {
                    $(this).remove();
                })

        },
        showNotice: function(text) {
            this.showNotification('notice', text);
        },
        showAlert: function(text) {
            this.showNotification('alert', text)
        },
        alert : function(text){
            var alert = $('<div>'+text+'</div>');
            alert.dialog({
                title		: 'Ошибка',
                width		: 300,
                height		: 10,
                autoResize	: true,
                dialogClass	: 'ui-state-error',
                resizable	: false,
                closable	: true,
                draggable	: true,
                modal		:true,
                closeOnEscape	: true,
                buttons		: {
                    'Закрыть' : function(){
                        alert.dialog('destroy');
                    }
                }
            });
        },
        refresh: function() {
          this.redirect(document.location.href);
        },
        redirect: function(path) {
            document.location = path
        },
        initGroupSorter: function() {
            $('.groups-table').sortable({
                handle : '.order-handler',
                axis  : 'y',
                cursor: 'n-resize',
                revert: true,
                scroll: true,
                deactivate: function(e, ui) {
                    Engine.showAjaxLoader = false;
                    $.post('?', {
                          object: 'Groups.saveOrder',
                          'items[]': $('.groups-table').sortable('toArray')
                      },
                      function(response) {
                          if (response.success) {
                              Engine.showNotice(t('form.saved'));
                          }
                      }, 'json'
                    );
                    Engine.showAjaxLoader = true;
                }
            });
        }
    };

 	Engine.init();

});

