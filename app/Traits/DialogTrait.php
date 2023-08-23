<?php

namespace App\Traits;
use WireUi\Traits\Actions;

trait DialogTrait{

    use  Actions;
    public function showError($title='Operation Failed', $description='There was an error processing your request'){

        $this->dialog()->error(

            $title = $title,

            $description = $description,

        );
    }
    public function showSuccess ($title='Operation Completed', $description='Your request has been processed successfully'){


        $this->dialog()->success(

            $title = $title,

            $description = $description,

        );
    }
}