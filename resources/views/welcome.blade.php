@extends('layouts.master')

@section('content')
@vite('resources/js/scroll-out.js')

<div class="main">
    <div class="image Ifirst">
        <div class="image-text Tfirst">
            <h1>Revolutionize<br>
                Your Commute</h1>
        </div>
        <img src="images/bicycle.jpg" width="100%" />

    </div>

    <div class="text">
        <div class="description">
            <h2>Cycling is not just a passion it is made to improve your health status!</h2><br>
            <h6>Studies shows that only</h6>
        </div>
        <div class="prom">
            <div style="padding-right:0.5vw;">
                <h1 style="font-size: 11em !important;">20%</h1><br>
                <h6>Only use their bike's THREE times per ONE week</h6>
            </div>
            <div style="padding-left:0.5vw;">
                <h1 style="font-size: 11em !important;">50%</h1><br>
                <h6>Only use their bike's ONCE per TWO weeks</h6>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-text">
            <h1>Enjoy</h1>
        </div>
        <div class="row">
            <div class="col-4 grid">
                <h5>“You are one ride away from a good mood.”
                    <br>~Sarah Bentley, British cyclist
                </h5>
            </div>
            <div class="col-4 grid asy">
                <img src="images/bike1.jpg" width="100%" height="100%">
            </div>
            <div class="col-4 grid">
                <h5>“The bicycle is a curious vehicle. Its passenger is its engine.”
                    <br>~John Howard, US cyclist
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-4 grid asy">
                <img src="images/bike2.jpeg" width="100%" height="100%">
            </div>
            <div class="col-4 grid">
                <h5>“Don’t buy upgrades, ride up grades.”
                    <br>~Eddy Merckx, Belgian pro racer
                </h5>
            </div>
            <div class="col-4 grid asy">
                <img src="images/bike3.jpg" width="100%" height="100%">
            </div>
        </div>

    </div>
    <div class="image Isecond">
        <center>
            <h3>Brace the</h3>
            <h1 style="margin-bottom: 1%;">NATURE</h1>
        </center>
        <h2>ECO</h2>
        <img src="images/bicycle2.jpeg" width="100%" />
    </div>
    <div class="segment">
        <h3>Be smart<br>
            Play your economic way</h3>
        <div class="image Ithird">
            <img src="/images/electric1.jpg" width="100%" height="100%">
        </div>
        <div class="row seg-row">
            <div class="col 6 grid" style="margin-right: 1%;">
                <img src="/images/electric2.png" width="100%" height="100%">
            </div>
            <div class="col 6 grid" style="margin-left: 1%;">
                <img src="/images/electric3.png" width="100%" height="100%">
            </div>
        </div>
    </div>
    <div class="last">
        <div class="image last">
            <img src="/images/lastbike1.jpg" width="100%" height="100%">
        </div>
    </div>
</div>
@stop