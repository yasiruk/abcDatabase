@extends('layout')
@section('content')
<div ng-app="" ng-controller="customersController"> 

<p><input type="text" ng-model="instantFilter"></p>

<table class="table">
  <tr>
  	<th>BL Number</th>
  	<th>Shipper</th>
  	<th>Voyage Number</th>
  	<th>Consignee</th>
  </tr>
  <tr ng-repeat="record in billoflading.data | filter:instantFilter">
    <td>{{ record.blnumber }}</td>
    <td>{{ record.shipper }}</td>
    <td>{{ record.voyageno }}</td>
    <td>{{ record.consignee }} </td>
  </tr>
</table>

</div>
<script>
function customersController($scope,$http) {
    $http.get("http://localhost/oosd/public/json/browse")
    .success(function(response) {$scope.billoflading = response;});
}
</script>
@stop