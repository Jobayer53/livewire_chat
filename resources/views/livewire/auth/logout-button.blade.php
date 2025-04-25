<div>
    <?php

use App\Livewire\Actions\Logout;
use function Livewire\Volt\{action};

action(function (Logout  $logout) {
    $logout();
    $this->redirect('/');
});

?>
    <button class="nav-link" type="button">
        <i  class="bi bi-box-arrow-right fs-5 me-2"></i>
    </button>
</div>
