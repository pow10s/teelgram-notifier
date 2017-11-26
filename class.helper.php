<?php

class Helper
{
    public function get_categories_buttons_list()
    {
        if (get_categories()) {
            $keyboard = [];
            foreach (get_categories() as $category) {
                $keyboard[] =
                    [
                        ['text' => $category->name, 'callback_data' => $category->term_id]
                    ];
            }
            return $keyboard;
        } else {
            return false;
        }
    }

    public function get_quote()
    {
        $quotes = "Don't cry because it's over, smile because it happened. ― Dr. Seuss
        Two things are infinite: the universe and human stupidity; and I'm not sure about the universe. ― Albert Einstein
        Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind ― Bernard M. Baruch
        A room without books is like a body without a soul. ― Marcus Tullius Cicero
        You know you're in love when you can't fall asleep because reality is finally better than your dreams. ― Dr. Seuss
        You only live once, but if you do it right, once is enough. ― Mae West
        Be the change that you wish to see in the world. ― Mahatma Gandhi
        In three words I can sum up everything I've learned about life: it goes on. ― Robert Frost
        If you tell the truth, you don't have to remember anything. ― Mark Twain
        A friend is someone who knows all about you and still loves you. ― Elbert Hubbard
        Always forgive your enemies; nothing annoys them so much. ― Oscar Wilde
        Live as if you were to die tomorrow. Learn as if you were to live forever. ― Mahatma Gandhi
        I am so clever that sometimes I don't understand a single word of what I am saying. ― Oscar Wilde, The Happy Prince and Other Stories
        Without music, life would be a mistake. ― Friedrich Nietzsche, Twilight of the Idols";
        $quotes = explode("\n", $quotes);
        return $quotes[mt_rand(0, count($quotes) - 1)];
    }
}