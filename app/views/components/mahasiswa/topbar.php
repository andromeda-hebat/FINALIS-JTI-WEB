<div id="topbar" class="navbar d-flex justify-content-between">
	<div class="ms-5">
		<div class="d-flex pt-3 ">
			<img src="<?= $_SESSION['user_photo'] ?>" alt="Profil" class="rounded-circle"
				style="width: 30px; height: 30px; background-color: #ddd;">
			<div class="ms-2 flex-column text-start">
				<h5 class="mb-0"><?= $_SESSION['full_name'] ?></h5>
				<p class="mt-0" style="font-size: 12px;"><?= $_SESSION['user_id'] ?></p>
			</div>
		</div>
	</div>
	<div class="me-5">
		<a href="/notifikasi">
			<svg width="30" height="30" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="25" cy="25" r="25" fill="#D9D9D9" fill-opacity="0.46" />
				<g clip-path="url(#clip0_610_4146)">
					<path
						d="M25 39.9997C25.9946 39.9997 26.9484 39.6046 27.6516 38.9013C28.3549 38.1981 28.75 37.2442 28.75 36.2497H21.25C21.25 37.2442 21.6451 38.1981 22.3483 38.9013C23.0516 39.6046 24.0054 39.9997 25 39.9997ZM26.8656 12.0603C26.8918 11.7996 26.863 11.5363 26.7812 11.2874C26.6993 11.0385 26.5662 10.8095 26.3905 10.6152C26.2147 10.4209 26.0001 10.2656 25.7606 10.1593C25.5211 10.053 25.262 9.99805 25 9.99805C24.738 9.99805 24.4789 10.053 24.2394 10.1593C23.9999 10.2656 23.7853 10.4209 23.6095 10.6152C23.4338 10.8095 23.3007 11.0385 23.2188 11.2874C23.137 11.5363 23.1082 11.7996 23.1344 12.0603C21.0151 12.4914 19.1099 13.6416 17.7414 15.3163C16.373 16.9909 15.6253 19.087 15.625 21.2497C15.625 23.3084 14.6875 32.4997 11.875 34.3747H38.125C35.3125 32.4997 34.375 23.3084 34.375 21.2497C34.375 16.7122 31.15 12.9247 26.8656 12.0603Z"
						fill="#052C65" />
				</g>
				<defs>
					<clipPath id="clip0_610_4146">
						<rect width="30" height="30" fill="white" transform="translate(10 10)" />
					</clipPath>
				</defs>
			</svg>
		</a>
	</div>
</div>