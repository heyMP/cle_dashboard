<div ng-app="cleDashboard" ng-controller="cleAssignments" class="cle-dashboard">
  
  <div class="collection with-header">
    <div class="collection-header"><h3>My Assignements</h3></div>
    <a href="{{basePath}}node/{{assignment.nid}}" ng-repeat="assignment in data.assignments" ng-cloak>
      <div class="collapsible-header"><i class="material-icons">assignment</i> 
        <b>{{assignment.node_title}}</b>
        <span class="secondary-content" ng-if="assignment.field_field_due_date"> Due Date: {{assignment.field_field_due_date[0].raw.value}} </span>
      </div>
    </a>
  </div>

  <div class="collection with-header">
    <div class="collection-header"><h3>My Submissions</h3></div>
    <a href="{{basePath}}node/{{submission.nid}}" class="avatar" ng-repeat="submission in data.submissions" ng-cloak>
      <div class="collapsible-header"><i class="material-icons">subject</i> 
        <b>{{submission.node_title}}</b> 
        <span class="secondary-content" ng-if="submission.node_created"> Posted: {{submission.node_created}}</span>
      </div>
    </a>
  </div>

  <div class="collection with-header">
    <div class="collection-header"><h3>My Critiques</h3></div>
    <a href="{{basePath}}node/{{critique.nid}}" class="avatar" ng-repeat="critique in data.critiques" ng-cloak>
      <div class="collapsible-header"><i class="material-icons">assignment</i> 
        <b>{{submission.node_title}}</b> 
        <span class="secondary-content" ng-if="critique.node_created"> Posted: {{critique.node_created}}</span>
      </div>
    </a>
  </div>

</div>
