'use strict';

/* App Module */

angular.module(
		'phonecat', 
		['phonecatFilters', 'phonecatServices']	
	)
	.config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/phones', {templateUrl: 'angular/phone-list.html',   controller: PhoneListCtrl}).
      when('/phones/:phoneId', {templateUrl: 'angular/phone-detail.html', controller: PhoneDetailCtrl}).
      otherwise({redirectTo: '/phones'});
}]);	