<!--<h1>--><?//=$hiWord?><!--</h1>-->
<!--<p>--><?//=$exlane?><!--</p>-->

<?
/* @var \app\models\tables\Tasks*/
foreach ($tasks as $task) :?>
<p><?=$task->name?></p>
<?endforeach;?>