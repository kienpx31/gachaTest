@extends('app')

@section('content')
<div id="documenter_content">
	<h2 align="center">GACHA</h2>
	<div class="spaceElemnt"></div>
	<table border="0" cellspacing="0" cellpadding="0" class="bordered tableTwoFormOne">
		<tr>
			<th colspan="4" class="title1" id="tbl_normal">Normal Gacha</th>
		</tr>
		<tr>
			<td colspan="4">Player can do this gacha once per 1 hour without coin ( means free ). And if
the player wants to play more, the player have to pay 100 coins.</td>
		</tr>
	</table>
	<div class="spaceElemnt"></div>
	<table border="0" cellspacing="0" cellpadding="0" class="bordered tableTwoFormOne">
		<tr>
			<th colspan="4" class="title1" id="tbl_expensive">Expensive Gacha</th>
		</tr>
		<tr>
			<td colspan="4">Player can do this gacha once per 1 day without coin. And if the player wants
to play more, the player have to pay 1000 coins.</td>
		</tr>
	</table>
	<div class="spaceElemnt"></div>
	<table border="0" cellspacing="0" cellpadding="0" class="bordered tableTwoFormOne">
		<tr>
			<th colspan="4" class="title1" id="tbl_box">Box Gacha</th>
		</tr>
		<tr>
			<td colspan="4">Player need to pay 500 coins for play. Gacha box will be reset on the beggining( 00:00:00 AM ) of each day.</td>
		</tr>
		<tr>
			<td colspan="4">If you don't know what Box Gacha is, you need to read some DeNA Document about Gacha.</td>
		</tr>
	</table>
</div>
@endsection
