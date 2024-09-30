<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 全てのSurveyデータを取得
        $surveys = Survey::all();

        // surveys.blade.phpというビューにデータを渡す
        return view('surveys', ['surveys' => $surveys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($region, $generation, $feedback)
    {
        // Surveyモデルを使って新しいフィードバックを保存
        $survey = new Survey();
        $survey->region = $region;
        $survey->generation = $generation;
        $survey->feedback = $feedback;
        $survey->save();

        return response()->json([
            'message' => 'Survey added successfully!',
            'region' => $region,
            'generation' => $generation,
            'feedback' => $feedback
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
