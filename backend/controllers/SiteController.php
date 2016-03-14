<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use developeruz\db_rbac\behaviors\AccessBehavior;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'as AccessBehavior' => [
                'class' => AccessBehavior::className(),
                'rules' =>
                    ['site' =>
                        [
                            [
                                'actions' => ['login', 'index', 'error', 'logout'],
                                'allow' => true,
                            ],
                            [
                                'actions' => ['*'],
                                'allow' => true,
                                'roles' => ['admin_role', 'super_admin_role'],
                            ],
                        ]
                    ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
//    public function actionCreateRole() {
//        $role = Yii::$app->authManager->createRole('admin');
//        $role->description = 'Админ';
//        Yii::$app->authManager->add($role);
//
//        $role = Yii::$app->authManager->createRole('user');
//        $role->description = 'Юзер';
//        Yii::$app->authManager->add($role);
//        echo 'Ok';
//    }
//    
//    // if(Yii::$app->user->can('deleteUser'))
//    public function actionCreatePermission() {
//        $permit = Yii::$app->authManager->createPermission('deleteUser');
//        $permit->description = 'Право удалять пользователя';
//        Yii::$app->authManager->add($permit);
//        echo 'Ok';
//    }
//    
//    public function acteionInheritPermissionOrRole() {
//        $role = Yii::$app->authManager->getRole($name);
//        $permit = Yii::$app->authManager->getPermission($permit);
//        Yii::$app->authManager->addChild($role, $permit);
//        echo 'Ok';
//    }
//    
//    // Yii::$app->authManager->getRolesByUser($user->getId());
//    public function actionSetUserRole() {
//        $userRole = Yii::$app->authManager->getRole('name_of_role');
//        Yii::$app->authManager->assign($userRole, $user->getId());
//    }
//    
//    public function actionSetUserPermission() {
//        $permit = Yii::$app->authManager->getPermission($permit);
//        Yii::$app->authManager->assign($permit, $user->getId());
//    }
}
