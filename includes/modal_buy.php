<div class="modal fade" id="ModalBuyItem" tabindex="-1" role="dialog" aria-labelledby="ModalBuyItem" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalBuyItem">Оформление заказа</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<form action="">
				<div class="modal-body">
						<div class="form-group row">
								<label for="recipient-name" class="col-sm-4 col-form-label">Ваше Имя:</label>
								<div class="col-sm-8"><input type="text" pattern="[A-Za-zА-Яа-яЁё]+$" placeholder="Имя" class="form-control" id="recipient-name"required></div>
						</div>
				<div class="form-group row">
								<label for="recipient-surname" class="col-sm-4 col-form-label">Ваша Фамилия:</label>
								<div class="col-sm-8"><input type="text" pattern="[A-Za-zА-Яа-яЁё]+$" placeholder="Фамилия" class="form-control" id="recipient-surnamename" required></div>
						</div>
				<div class="form-group row">
							<label for="email-text" class="col-sm-4 col-form-label">Ваш email:</label>
							<div class="col-sm-8"><input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="yourmail@domain.com" class="form-control" id="email-text" required></input></div>
							</div>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
					<button type="submit" class="btn btn-confirm">Оформить</button>
				</div>
			</form>
		</div>
	</div>
</div>