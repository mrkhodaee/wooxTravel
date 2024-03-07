@section('pageTitle' , 'رزرو های من')

<x-app-layout>
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>رزرو های من</h2>
                </div>
            </div>
        </div>
    </div>
    <table class="table m-5">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">شماره تلفن</th>
                <th scope="col">شماره سفر</th>
                <th scope="col">تاریخ ورود</th>
                <th scope="col">مقصد</th>
                <th scope="col">قیمت</th>
                <th scope="col">وضعیت</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <th scope="row">{{ $booking->id }}</th>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->phone_number }}</td>
                <td>{{ $booking->num_guest }}</td>
                <td>{{ $booking->check_in_date }}</td>
                <td>{{ $booking->destination }}</td>
                <td>{{ $booking->price }}</td>
                <td>{{ $booking->status }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</x-app-layout>