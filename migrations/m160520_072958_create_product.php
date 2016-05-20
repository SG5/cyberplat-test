<?php

use yii\db\Migration;

/**
 * Handles the creation for table `product`.
 */
class m160520_072958_create_product extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id'          => $this->primaryKey(),
            "category_id" => $this->integer()->unsigned()->notNull()->defaultValue(0),
            "title"       => $this->string()->notNull()->defaultValue(""),
            "image_url"   => $this->string()->notNull()->defaultValue(""),
        ]);

        $this->batchInsert("product", ["category_id", "title", "image_url"], [
            [1, "Yandex деньги", "https://cdn3.iconfinder.com/data/icons/rcons-social/32/yandex_money-128.png"],
            [1, "Paypal", "https://cdn3.iconfinder.com/data/icons/picons-social/57/29-paypal-128.png"],

            [2, "Bitcoin", "https://cdn4.iconfinder.com/data/icons/currency-bitcoin-vol-1/32/notes_Bitcoin_card_currency_money_payment_finance-128.png"],
            [2, "Dogecoin", "https://cdn4.iconfinder.com/data/icons/dogecoin/512/dogecoin_doge_1-128.png"],

            [4, "WMZ", "//cdn3.iconfinder.com/data/icons/rcons-social/32/webmoney-128.png"],
            [4, "WMR", "//cdn3.iconfinder.com/data/icons/rcons-social/32/webmoney-128.png"],

            [3, "Warcraft", "//cdn3.iconfinder.com/data/icons/systematrix/WoW.png"],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
