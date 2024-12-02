<div id="topbar" 
	class="navbar position-absolute top-0 end-0 pe-5 d-flex justify-content-end">
	<div class="mx-3 text-end">
		<div class="text-center d-flex pt-3 ">
			<img src="<?= $_SESSION['user_photo'] ?>" alt="Profil" class="rounded-circle"
				style="width: 30px; height: 30px; background-color: #ddd;">
			<div class="ms-2 flex-column text-start">
				<h5 class="mb-0"><?= $_SESSION['full_name'] ?></h5>
				<p class="mt-0" style="font-size: 12px;"><?= $_SESSION['user_id'] ?></p>
			</div>
		</div>
	</div>
</div>