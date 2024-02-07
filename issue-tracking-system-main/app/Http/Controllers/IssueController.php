<?php

namespace App\Http\Controllers;

use App\Models\Issue;


use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * List all issues
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(
            Issue::all()
        );
    }
    /*
     * Store an issue
     */
    public function store(Request $request)
    {
          Issue::create([
              'title' => $request->title,
              'body' => $request->body,
              'uuid' => $request->uuid,
              'slug' => $request->slug,
          ]);

          return response()->noContent();
    }

    /*
     * Find an issue
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Issue $issue)
    {
        return response()->json(
            $issue
        );
    }

    /*
     * Update and issue
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Issue $issue)
    {
        $issue->update();

        return response()->noContent();
    }

    /*
     * Delete an issue
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();

        return response()->noContent();
    }
}
