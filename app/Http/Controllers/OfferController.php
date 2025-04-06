<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Actions\GetData;

class OfferController extends Controller
{
  public function index()
  {
    $data = (new GetData())->execute();
    return view('pages.offer', compact('data'));
  }
}


