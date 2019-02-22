<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Grocery;

class CreateGroceriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function store(Request $request)
     {
            $grocery = new Grocery();
            $grocery->name = $request->name;
            $grocery->type = $request->type;
            $grocery->price = $request->price;

            $grocery->save();
            return response()->json(['success'=>'Data is successfully added']);
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groceries');
    }
}
