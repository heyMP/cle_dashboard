Drupal.behaviors.cleDashboard = {
  attach: function (context, settings) {
    angular.module('cleDashboard', [ 
        'ngSanitize'
      ])
      .controller('cleAssignments', ['$scope', function($scope) {
        if (Drupal.settings.cleDashboard) {
          $scope.data = Drupal.settings.cleDashboard;
          $scope.basePath = Drupal.settings.basePath;
        }
      }])
    ; // end Angular
  }
};
