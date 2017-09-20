<?php

namespace App\Http\Controllers;

use App\Codetest\Repository\Lottery;
use Illuminate\Http\Request;

class LotteryController extends Controller
{
    /**
     * @var Lottery helps to retrieve lottery data
     */
    protected $repository;

    /**
     * LotteryController constructor.
     * @param Lottery $repository
     */
    public function __construct(Lottery $repository)
    {
        $this->repository = $repository;
    }

    /**
     *
     */
    public function index()
    {
        return view('main', [
            'lotteries' => $this->repository->getLotteries(),
        ]);
    }

    public function show($lotteryKey)
    {
        return view('lottery', [
            'lottery' => $this
                ->repository
                ->getLotteries()
                ->where('key', '=', $lotteryKey)
                ->first(),
        ]);
    }
}
