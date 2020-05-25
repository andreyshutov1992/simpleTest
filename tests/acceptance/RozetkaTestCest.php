<?php 

class RozetkaTestCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage("/");
    }

    // tests
    public function simpleTest(AcceptanceTester $I)
    {
        $I->seeInSource('Доставка по всей Украине');
    }
}
