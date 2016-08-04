<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >
		<div class="modal-header" id="text">
			<button class="close" type="button" data-dismiss="modal" aria-label="Fechar">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title text-center""> Produto 1</h4>
		</div>
		<div class="modal-body" id="fontf">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
						<center>
						<br />
						<br />
							<img src="images/jeans.png" alt="Produto1" class="details img-responsive"  />
						</center>
						</div>
					</div>
					<div class="col-sm-6">
						<h4>Detalhes</h4>
						<p>Top seller</p>
						<br />
						<h5 class="list-price text-danger"><s>$24.99</s></h5>
						<h4>$14.99</h4>
						<br />
						<form action="add_cart.php" method="post">
							<div class="form-group">
								<div class="col-xs-3">
									<label for="quantity" id="quantity-label">Quantity:</label>
									<input type="text class="form-control" id="quantity" name="quantity" />
								</div>
								<br />
								<br />
								<br />
								<div class="form-group">
									<label for="size">Tamanho:</label>
									<select name="size" id="size" class="form-control">
										<option value=""></option>
										<option value="28">28</option>
										<option value="32">32</option>
										<option value="36">36</option>
										<option value="40">40</option>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer" id="text">
			<button class="btn btn-default" data-dismiss="modal">Fechar</button>
			<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Adicionar ao carrinho</button>
		</div>
		</div>
	</div>
</div>
