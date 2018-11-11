<?php
namespace app\components;
use app\models\tables\Tasks;
use app\models\tables\Users;
use yii\base\Component;
use yii\base\Event;

class EventsComponent extends Component
{
    public function init()
    {
        parent::init();

        Event::on(Tasks::class, Tasks::EVENT_AFTER_INSERT, function (Event $event){
            $model = $event->sender;
            $user = Users::findone($model->user_id);
            $message = "Уважаемый {$user->login}! На вас поставлена задача {$model->name}. 
            Извольте сделать до {$model->date}.";

            \Yii::$app->mailer->compose()
                ->setTo($user->email)
                ->setSubject("Новая задача")
                ->setTextBody($message)
                ->send();

        });
    }
}