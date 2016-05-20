<?php

use yii\db\Migration;

/**
 * Handles the creation for table `category`.
 */
class m160520_072057_create_category extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id'        => $this->primaryKey(),
            "parent_id" => $this->integer()->unsigned()->notNull()->defaultValue(0),
            "title"     => $this->string()->notNull()->defaultValue(""),
            "image_url" => $this->string()->notNull()->defaultValue(""),
        ]);

        $this->batchInsert("category", ["id", "parent_id", "title", "image_url"], [
            [1, 0, "Электронные валюты", "//cdn1.iconfinder.com/data/icons/business-and-finance-20/200/vector_65_07-128.png"],
            [2, 0, "Криптовалюты", "//cdn4.iconfinder.com/data/icons/currency-bitcoin-vol-1/32/safe_vault_secure_Bitcoin_card_currency_money_payment_finance-128.png"],
            [3, 0, "Игровые валюты", "//cdn3.iconfinder.com/data/icons/forall/110/game-128.png"],

            [4, 1, "Webmoney", "//cdn3.iconfinder.com/data/icons/rcons-social/32/webmoney-128.png"],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
