<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DOSCGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function Calculate()
    {
        //
        $c   = $this->findC();
        $xyz = $this->findXYX();

        return view('calculate', compact('c', 'xyz'));

    }
    public function findXYX()
    {
        //X, Y, 5, 9, 15, 23, Z

        $input = "X,Y,5,9,15,23,Z";

        $inputArray = explode(",", $input);

        $clonelist     = [];
        $liststring    = [];
        $listNumbers   = [];
        $subdistance   = [];
        $stringIndex   = 0;
        $NumbersIndex  = 0;
        $checkdistance = 0;

        for ($i = 0; $i < count($inputArray); $i++) {
            $clonelist[$i] = $inputArray[$i];
            if (!is_numeric($inputArray[$i])) {
                $liststring[$stringIndex] = $inputArray[$i];
                $stringIndex++;
            } else {
                $listNumbers[$NumbersIndex] = $inputArray[$i];
                $NumbersIndex++;

            }
        }

        for ($i = 0; $i < count($listNumbers); $i++) {
            //find index
            $index = array_search($listNumbers[$i], $inputArray);
            if (is_numeric($inputArray[$index + 1])) {
                $subdistance[$index] = intval($inputArray[$index + 1]) - intval($inputArray[$index]);
                $copysubdistanc[$i]  = $subdistance[$index];
            }

        }

        for ($i = 0; $i <= count($copysubdistanc) - 2; $i++) {

            $distance[$i]  = intval($copysubdistanc[$i + 1]) - intval($copysubdistanc[$i]);
            $checkdistance = $distance[$i];
            if ($i == 0) {
                $deldistance = $distance[0];
            } else if ($distance[$i] != $distance[$i - 1]) {
                $deldistance = $distance[$i];

            }

        }

        $sum = 0;
        foreach ($subdistance as $key => $value) {
            $sum = $sum + $key;
        }
        $avdindex = $sum / count($subdistance);

        for ($i = $avdindex; $i > 0; $i--) {

            $subdistance[$i - 1] = $subdistance[$i] - $deldistance;
            $inputArray[$i - 1]  = $inputArray[$i] - $subdistance[$i - 1];
        }
        for ($i = $avdindex; $i < count($inputArray) - 1; $i++) {

            $subdistance[$i + 1] = $subdistance[$i] + $deldistance;
            $inputArray[$i + 1]  = $inputArray[$i] + $subdistance[$i];
        }

        // find result by array index
        $result = [
            "x" => $inputArray[array_search("X", $clonelist)],
            "y" => $inputArray[array_search("Y", $clonelist)],
            "z" => $inputArray[array_search("Z", $clonelist)],
        ];

        return $result;

    }

    public function findC()
    {
        //If A = 21, A + B = 23, A + C = -21
        $a = 21;
        $b = 23 - $a;
        $c = -21 - $a;
        return $c;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
