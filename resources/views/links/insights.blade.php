@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col card m-4 p-3 col-offset-2" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images/chart_1.svg')}}" alt="Card image cap" height="250">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">
                    View User Agents
                </button>
            </div>
        </div>
        <div class="col card m-4" style="width:18rem;">
            <img class="card-img-top" src="{{ asset('images/chart_2.svg')}}" alt="Card image cap" height="250">
            <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg2">
                    View User Locations
                </button>
            </div>
            </div>
    </div>

    
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-5">
                <h4>User Agent or Browsers</h4>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-5">
                <h4>User Locations</h4>
            <canvas id="myChart2"></canvas>
            
            </div>
        </div>
    </div>

</div>

<script>
    const ctx = document.getElementById('myChart');
    const ctx2 = document.getElementById('myChart2');

    new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Firefox', 'Chrome', 'Safari', 'Opera', 'Brave', 'IE','Edge'],
        datasets: [{
        label: 'No. of Visits',
        data: [12, 19, 3, 5, 2, 3,0],
        borderWidth: 2
        }]
    },
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
    });


    new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Asia','Europe','Africa','North America','South America','Australia'],
        datasets: [{
            label: 'Percentage of viewer"s location',
            data: [30, 50, 10,3,4,3],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(255, 99, 100)',
            'rgb(54, 162, 200)',
            'rgb(255, 205, 100)'
            ],
            hoverOffset: 4
        }]
    },

    });



</script>
@endsection