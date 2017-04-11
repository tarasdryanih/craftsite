<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m170411_121459_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'mail' => $this->string('255')->notNull()->unique(),
            'firstname' => $this->string('255')->notNull(),
            'lastname' => $this->string('255')->notNull(),
            'phonenumber' => $this->integer(15)->notNull()->unique(),
            'password' => $this->text()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
