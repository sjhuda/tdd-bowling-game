<?php

class BowlingGameTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_scores_a_gutter_game_as_zero() {
        /** @var BowlingGame $game */
        $game = new BowlingGame();
        for ($i = 0; $i < 20; $i++) {
            $game->roll(0);
        }

        $score = $game->score();
        $this->assertEquals(0, $score);
    }
}
