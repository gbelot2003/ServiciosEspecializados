<div class="indigo lighten-3">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="close-x">
					<span class="close mdi-navigation-close"></span>								
				</div>
				<h1><% name %></h1>
				<hr >
				
				<div class="col s12 m6 l4">
					<img src="<% imagen %>" />
				</div>

				<div class="col s12 m6">
						<div class="col s12 m6 l8">
							<h3>Cargo: <em><% cargo %></em></h3>							
						</div>
					
						<div class="col s12">
							<strong>Ubicación:</strong> <em><% location %></em> 
						</div>

						<div class="col s12">
							<blockquote cite="http://example.com/facts">
								<% about %>
							</blockquote>
						</div>

						<div class="col s12">
							<strong>Web-Site :</strong> <em><a href="<% website %>" target="_black"><% website %></a></em>
						</div>

						<div class="col s12" ng-hide="!github">
							<strong>github :</strong> <em><a href="<% github %>" target="_black"><% github %></a></em>
						</div>

						<div class="col s12" ng-hide="!facebook">
							<strong>facebook :</strong> <em><a href="<% facebook %>" target="_black"><% facebook %></a></em>
						</div>

						<div class="col s12" ng-hide="!tweeter">
							<strong>twetter :</strong> <em><a href="<% tweeter %>" target="_black"><% tweeter %></a></em>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>