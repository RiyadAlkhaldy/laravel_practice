<?php

namespace App\Observers;

use App\Models\Test;

class TestObserver
{

    /**
     * Handle the Test "retrieved" event.
     */
    public function retrieved(Test $test): void
    {
//        $test->name = "the retrieved Method 1 "  ;
//        $test->save();
    }
    /**
     * Handle the Test "created" event.
     */
    public function created(Test $test): void
    {
//        $test->name = "the created Method " . $test->name;
//        $test->save();
    }
    /**
     * Handle the Test "created" event.
     */
    public function creating(Test $test): void
    {
//        $test->name = "the creating Method";
//        $test->save();
    }

    /**
     * Handle the Test "updated" event.
     */
    public function updated(Test $test): void
    {
//        $test->name = "the updated Method";

    }

    /**
     * Handle the Test "deleted" event.
     */
    public function deleted(Test $test): void
    {
        //
    }

    /**
     * Handle the Test "restored" event.
     */
    public function restored(Test $test): void
    {

    }

    /**
     * Handle the Test "force deleted" event.
     */
    public function forceDeleted(Test $test): void
    {
        //
    }
}
