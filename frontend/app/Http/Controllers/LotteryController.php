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
     * List lotteries
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('main', [
            'lotteries' => $this->repository->getLotteries(),
        ]);
    }

    /**
     * Show single lottery
     *
     * @param string $lotteryKey
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
