<div ng-app="cleDashboard" ng-controller="cleAssignments" class="cle-dashboard">
  
  <div class="collection with-header">
    <div class="collection-header"><h3>My Assignements</h3></div>
    <a href="{{basePath}}node/{{assignment.nid}}" ng-repeat="assignment in data.assignments" ng-cloak>
      <div class="collapsible-header"><i class="material-icons">assignment</i> 
        <b>{{assignment.node_title}}</b>
        <div class="secondary-content">
          <span class="chip" ng-if="assignment.active"> Active </span>
        </div>
        <div class="post-date">
          <span> Due: </span>
          <span ng-bind-html="assignment.field_field_begin_date[0].rendered['#markup']"></span> to <span ng-bind-html="assignment.field_field_due_date[0].rendered['#markup']"></span>
        </div>
      </div>
    </a>

    <a href="{{assignment.critique.url}}" ng-repeat="assignment in data.assignments" ng-if="assignment.critique" ng-cloak>
      <div class="collapsible-header">
        <i class="material-icons">subdirectory_arrow_right</i>
        <b>{{assignment.node_title}} Critique</b>
        <i class="material-icons right-align">comment</i>
        <div class="post-date">
          <span> Due: </span>
          <span ng-bind-html="assignment.field_field_critique_date[0].rendered['#markup']">  </span>
        </div>
      </div>
    </a>
  </div>

  <div class="collection with-header">
    <div class="collection-header"><h3>My Submissions</h3></div>
    <a href="{{basePath}}node/{{submission.nid}}" class="avatar" ng-repeat="submission in data.submissions" ng-cloak>
      <div class="collapsible-header"><i class="material-icons">subject</i> 
        <b>{{submission.node_title}}</b> 
        <div class="secondary-content">
          <span class="chip" ng-bind-html="submission.field_field_submission_state[0]['rendered']['#markup']"></span>
        </div>

        <div class="post-date" ng-if="submission.node_created">
          <span> Posted: </span> {{ submission.node_created | date: 'EEE, MM-dd-yy'}}
        </div>
      </div>
    </a>
  </div>

  <div class="collection with-header">
    <div class="collection-header"><h3>My Critiques</h3></div>
    <a href="{{basePath}}node/{{critique.nid}}" class="avatar" ng-repeat="critique in data.critiques" ng-cloak>
      <div class="collapsible-header"><i class="material-icons"> comment </i> 
        <b>{{critique.node_title}}</b> 
        <div class="post-date" ng-if="critique.node_created">
          <span> Posted: </span> {{ critique.node_created | date: 'EEE, MM-dd-yy'}}
        </div>
      </div>
    </a>
  </div>

</div>
