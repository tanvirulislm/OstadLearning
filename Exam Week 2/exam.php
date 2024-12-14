<?php
use Illuminate\Http\Request;

// Task 1 Start
Route::post('/form-submit', function (Request $request) {
    $email = $request->input('email');

    if ($email) {
        return response()->json([
            "status" => "success",
            "message" => "Form submitted successfully.",
            "email" => $email
        ]);
    } else {
        return response()->json([
            "status" => "failed",
            "message" => "Form submission failed."
        ]);
    }
});
// Task 1 End




// Task 2 Start
Route::get('/user-agent', function (Request $request) {
    $userAgent = $request->header('User-Agent');
    return response($userAgent);
});
// Task 2 End
