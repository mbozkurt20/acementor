<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FrequentlyAskedQuestions extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $frequents = [
            [
                'id' => 1,
                'title' => 'What is Educate?',
                'body' => 'Educate is an online Education platform that teaches you hard business skills. We aim to educate people with monetizable skills and show them how to monetize them. Currently, we teach social media marketing, six-figure sales, and copywriting. We already offer three core programs with new programs launching every 4-6 months. Each student that enrolls gets access to our pre-recorded content, live weekly coaching calls with experts, and their personal 1:1 success coach.'
            ],
            [
                'id' => 2,
                'title' => 'What is included in an Educate membership?',
                'body' => 'Educate is an online Education platform that teaches you hard business skills. We aim to educate people with monetizable skills and show them how to monetize them. Currently, we teach social media marketing, six-figure sales, and copywriting. We already offer three core programs with new programs launching every 4-6 months. Each student that enrolls gets access to our pre-recorded content, live weekly coaching calls with experts, and their personal 1:1 success coach.'
            ],
            [
                'id' => 3,
                'title' => 'How long will I have access to Educate?',
                'body' => 'Educate is an online Education platform that teaches you hard business skills. We aim to educate people with monetizable skills and show them how to monetize them. Currently, we teach social media marketing, six-figure sales, and copywriting. We already offer three core programs with new programs launching every 4-6 months. Each student that enrolls gets access to our pre-recorded content, live weekly coaching calls with experts, and their personal 1:1 success coach.'
            ],
            [
                'id' => 4,
                'title' => 'What are the payment methods?',
                'body' => 'Educate is an online Education platform that teaches you hard business skills. We aim to educate people with monetizable skills and show them how to monetize them. Currently, we teach social media marketing, six-figure sales, and copywriting. We already offer three core programs with new programs launching every 4-6 months. Each student that enrolls gets access to our pre-recorded content, live weekly coaching calls with experts, and their personal 1:1 success coach.'
            ],
        ];
        return view('components.frequently-asked-questions',compact('frequents'));
    }
}
