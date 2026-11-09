<a href="{{ route('dokter.index') }}"
    class="{{ $baseLink }} {{ request()->routeIs('dokter.*') ? $active : $inactive }}">
    <i class="fas fa-user-doctor w-4 text-center"></i>
    Manajemen Dokter
</a>

<a href="{{ route('polis.index') }}"
    class="{{ $baseLink }} {{ request()->routeIs('polis.*') ? $active : $inactive }}">
    <i class="fas fa-hospital w-4 text-center"></i>
    Manajemen Poli
</a>

<a href="{{ route('pasien.index') }}"
    class="{{ $baseLink }} {{ request()->routeIs('pasien.*') ? $active : $inactive }}">
    <i class="fas fa-bed-pulse w-4 text-center"></i>
    Manajemen Pasien
</a>