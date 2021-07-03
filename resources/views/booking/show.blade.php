<h1>Customer Name : {{ $booking->customer->name }}</h1>
<h2>Room Type :{{ $booking->room->id }}</h2>
<p>Booking Number #{{ $booking->id }}</p>
<p>Booking Date from:  {{ $booking->from_date }}</p>
<p>Booking Date to:  {{ $booking->to_date }}</p>
<a href="/booking">Back To Main Task List></a>