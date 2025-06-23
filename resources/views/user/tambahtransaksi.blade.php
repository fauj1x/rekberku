@extends('layouts.main')

@section('title', 'Tambah Transaksi')

@section('content')

<form class="pb-28" enctype="multipart/form-data" method="POST" action="{{ route('user.tambahtransaksi.store') }}" id="transaksiForm">
  @csrf
  <div class="space-y-10">
    <div class="border-b border-gray-900/10 pb-10">
      <h2 class="text-lg font-semibold text-gray-900">Tambah Transaksi</h2>
      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-900 mb-2">Item yang akan dijual / beli</label>
        <input
          type="file"
          name="item_image"
          id="item_image"
          class="block w-full text-sm text-gray-900 file:mr-4 file:py-2 file:px-4
                 file:rounded-md file:border-0 file:text-sm file:font-semibold
                 file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
          accept="image/*"
          required
        >
        @error('item_image')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-8 mt-6">
        <div>
          <label for="role" class="block text-sm font-medium text-gray-900">Saya sebagai</label>
          <select
            name="role"
            id="role"
            class="mt-2 block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"
            required
          >
            <option value="" disabled {{ old('role') ? '' : 'selected' }}>Pilih peran Anda</option>
            <option value="penjual" {{ old('role')=='penjual'?'selected':'' }}>Penjual</option>
            <option value="pembeli" {{ old('role')=='pembeli'?'selected':'' }}>Pembeli</option>
          </select>
          @error('role')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
        <div>
          <label for="tujuan" class="block text-sm font-medium text-gray-900">Tujuan</label>
          <div class="mt-2">
            <input type="text" name="tujuan" id="tujuan" value="{{ old('tujuan') }}" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Masukkan tujuan transaksi" required>
          </div>
          @error('tujuan')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
        <div>
          <label for="nominal" class="block text-sm font-medium text-gray-900">Nominal</label>
          <div class="mt-2 relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span>
            <input type="text"
                   name="nominal"
                   id="nominal"
                   value="{{ old('nominal') }}"
                   inputmode="numeric"
                   autocomplete="off"
                   pattern="^[0-9.]*$"
                   class="pl-10 block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"
                   placeholder="0"
                   maxlength="15"
                   required
            >
          </div>
          @error('nominal')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
        <div>
          <label for="tanggal" class="block text-sm font-medium text-gray-900">Tanggal</label>
          <div class="mt-2">
            <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required>
          </div>
          @error('tanggal')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
        <div>
          <label for="buyer" class="block text-sm font-medium text-gray-900">Buyer <span class="text-xs text-gray-500">(nama asli)</span></label>
          <div class="mt-2">
            <input type="text" name="buyer" id="buyer" value="{{ old('buyer') }}" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Nama buyer" required>
          </div>
          @error('buyer')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
        <div>
          <label for="seller" class="block text-sm font-medium text-gray-900">Seller <span class="text-xs text-gray-500">(nama asli)</span></label>
          <div class="mt-2">
            <input type="text" name="seller" id="seller" value="{{ old('seller') }}" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Nama seller" required>
          </div>
          @error('seller')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
        {{-- Kolom nomor rekening, hanya tampil jika role=penjual --}}
        <div id="rekeningField" class="{{ old('role') == 'penjual' ? '' : 'hidden' }} md:col-span-2">
          <label for="nomor_rekening" class="block text-sm font-medium text-gray-900">Nomor Rekening Penjual</label>
          <div class="mt-2">
            <input type="text" name="nomor_rekening" id="nomor_rekening" value="{{ old('nomor_rekening') }}" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Masukkan nomor rekening penjual" {{ old('role') == 'penjual' ? 'required' : '' }}>
          </div>
          @error('nomor_rekening')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
        <div class="md:col-span-2">
          <label for="deskripsi" class="block text-sm font-medium text-gray-900">Deskripsi</label>
          <div class="mt-2">
            <textarea name="deskripsi" id="deskripsi" rows="3" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" placeholder="Deskripsikan transaksi" required>{{ old('deskripsi') }}</textarea>
          </div>
          @error('deskripsi')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
        {{-- Dropdown penanggung biaya admin --}}
        <div class="md:col-span-2">
          <label for="penanggung_biaya_admin" class="block text-sm font-medium text-gray-900">Biaya Admin Ditanggung Oleh</label>
          <select
            name="penanggung_biaya_admin"
            id="penanggung_biaya_admin"
            class="mt-2 block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"
            required
          >
            <option value="" disabled {{ old('penanggung_biaya_admin') ? '' : 'selected' }}>Pilih penanggung biaya admin</option>
            <option value="pembeli" {{ old('penanggung_biaya_admin')=='pembeli'?'selected':'' }}>Pembeli</option>
            <option value="penjual" {{ old('penanggung_biaya_admin')=='penjual'?'selected':'' }}>Penjual</option>
            <option value="dibagi" {{ old('penanggung_biaya_admin')=='dibagi'?'selected':'' }}>Dibagi antara Penjual &amp; Pembeli</option>
          </select>
          @error('penanggung_biaya_admin')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
      </div>
    </div>
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-lg mt-4">
      <div class="flex items-start">
        <svg class="w-6 h-6 text-yellow-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1 4v-4m-1 4v1a1 1 0 001 1h.01a1 1 0 001-1v-1m-2-8a4 4 0 118 0 4 4 0 01-8 0zm4-4a4 4 0 100 8 4 4 0 000-8z" />
        </svg>
        <div>
          <div class="font-semibold text-yellow-800 mb-1">Catatan Penting</div>
          <ul class="list-disc pl-5 text-sm text-yellow-800 space-y-1">
            <li>Pastikan semua data yang Anda isikan adalah benar dan sesuai dengan kondisi sebenarnya.</li>
            <li>Pengisian data yang tidak benar dapat menyebabkan kerugian bagi semua pihak.</li>
            <li>Data palsu atau tidak valid dapat berakibat pada pembatalan transaksi, pemblokiran akun, atau tindakan hukum sesuai peraturan yang berlaku.</li>
            <li>Selalu cek kembali sebelum submit untuk mencegah penipuan atau kesalahan transaksi.</li>
          </ul>
          <div class="mt-3 flex items-center">
            <input type="checkbox" id="agreement" name="agreement" required class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" {{ old('agreement') ? 'checked' : '' }}/>
            <label for="agreement" class="ml-2 text-sm text-yellow-900">
              Saya menyatakan bahwa data yang saya isikan sudah benar dan dapat dipertanggungjawabkan.
            </label>
          </div>
          @error('agreement')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
          @enderror
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row md:space-x-6 mt-8">
      <button type="button" id="openPaymentModal" class="flex items-center w-full md:w-auto justify-between rounded-full bg-indigo-50 px-4 py-3 text-base font-semibold text-indigo-700 hover:bg-indigo-100 focus:outline-none transition mb-4 md:mb-0">
        Pilih Metode Pencairan
        <svg class="w-5 h-5 ml-2 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>
      <button
        type="button"
        id="showSummaryBtn"
        class="w-full md:w-auto px-4 py-3 text-base font-semibold text-white shadow-xs transition"
        style="background-color: #9256e6; border-radius: 2rem;"
      >
        Lihat Ringkasan & Buat Transaksi
      </button>
      <button
        type="submit"
        id="submitBtn"
        class="hidden"
      >Submit</button>
    </div>
    <input type="hidden" name="bank_code" id="bank_code" value="{{ old('bank_code') }}" required>
    <input type="hidden" name="bank_name" id="bank_name" value="{{ old('bank_name') }}" required>
    <div id="paymentModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-30 hidden">
      <div class="bg-white rounded-lg shadow-xl w-full max-w-lg mx-4 p-6 relative">
        <button type="button" id="closePaymentModal" class="absolute right-4 top-4 text-gray-600 hover:text-gray-800 text-2xl">&times;</button>
        <h3 class="text-lg font-semibold mb-4">Pilih Metode Pembayaran</h3>
        <div id="bankList" class="space-y-2 max-h-64 overflow-y-auto">
          <div class="text-gray-500 text-sm text-center">Memuat daftar bank...</div>
        </div>
      </div>
    </div>
    <!-- Popup Ringkasan Transaksi -->
    <div id="summaryModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
      <div class="bg-white rounded-lg shadow-xl w-full max-w-lg mx-4 p-6 relative">
        <button type="button" id="closeSummaryModal" class="absolute right-4 top-4 text-gray-600 hover:text-gray-800 text-2xl">&times;</button>
        <h3 class="text-lg font-semibold mb-4">Ringkasan Transaksi</h3>
        <div id="summaryContent" class="text-base text-gray-800"></div>
        <div id="summaryTotal" class="my-6 text-center"></div>
        <div class="mt-6 flex justify-end">
          <button type="button" id="confirmSummaryBtn" class="px-6 py-2 bg-indigo-600 text-white rounded-full font-semibold">Konfirmasi & Buat Transaksi</button>
        </div>
      </div>
    </div>
  </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Nominal formatting
  const nominalInput = document.getElementById('nominal');
  nominalInput.addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value) {
      value = parseInt(value, 10).toLocaleString('id-ID');
      e.target.value = value.replace(/,/g, '.');
    } else {
      e.target.value = '';
    }
  });

  // Kolom rekening hanya muncul jika role=penjual
  const roleSelect = document.getElementById('role');
  const rekeningField = document.getElementById('rekeningField');
  const rekeningInput = document.getElementById('nomor_rekening');
  function toggleRekeningField() {
    if (roleSelect.value === 'penjual') {
      rekeningField.classList.remove('hidden');
      rekeningInput.required = true;
    } else {
      rekeningField.classList.add('hidden');
      rekeningInput.required = false;
    }
  }
  roleSelect.addEventListener('change', toggleRekeningField);
  toggleRekeningField();

  // --- Modal logic ---
  const modal = document.getElementById('paymentModal');
  const openBtn = document.getElementById('openPaymentModal');
  const closeBtn = document.getElementById('closePaymentModal');
  const bankList = document.getElementById('bankList');
  const bankCodeInput = document.getElementById('bank_code');
  const bankNameInput = document.getElementById('bank_name');

  // Hanya bank Midtrans utama
  const midtransBanks = [
    { code: 'bca', name: 'BCA (Bank Central Asia)' },
    { code: 'bri', name: 'BRI (Bank Rakyat Indonesia)' },
    { code: 'mandiri', name: 'Mandiri' },
    { code: 'bni', name: 'BNI (Bank Negara Indonesia)' }
  ];

  let cachedMaintenance = null;
  let maintenanceFetched = false;
  let maintenancePromise = null;

  function fetchMaintenance() {
    if (maintenanceFetched && cachedMaintenance) return Promise.resolve();
    if (maintenancePromise) return maintenancePromise;
    maintenancePromise = fetch('/flip/maintenance')
      .then(res => res.json())
      .then(data => {
        cachedMaintenance = data;
        maintenanceFetched = true;
      }).catch(() => {
        cachedMaintenance = { maintenance: false };
        maintenanceFetched = true;
      });
    return maintenancePromise;
  }

  function updatePaymentBtnVisibility() {
    if (roleSelect.value === 'penjual') {
      openBtn.style.display = '';
    } else {
      openBtn.style.display = 'none';
      modal.classList.add('hidden');
    }
  }
  updatePaymentBtnVisibility();
  roleSelect.addEventListener('change', updatePaymentBtnVisibility);

  function renderBankModal() {
    let maintenanceHtml = '';
    if (cachedMaintenance && cachedMaintenance.maintenance) {
      maintenanceHtml = `
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-3 mb-3 rounded">
          <b>Sedang Maintenance:</b> ${cachedMaintenance.maintenance_message || 'Layanan sedang dalam perawatan. Beberapa fitur mungkin tidak dapat digunakan.'}
        </div>
      `;
    }
    let html = maintenanceHtml;
    midtransBanks.forEach(bank => {
      html += `
        <button type="button" class="flex items-center justify-between w-full px-4 py-2 border rounded hover:bg-indigo-50"
          data-code="${bank.code}" data-name="${bank.name}">
          <span class="font-medium">${bank.name}</span>
          <span class="text-xs text-gray-500">${bank.code.toUpperCase()}</span>
        </button>
      `;
    });
    bankList.innerHTML = html;
    Array.from(bankList.querySelectorAll('button[data-code]')).forEach(btn => {
      btn.onclick = () => {
        bankCodeInput.value = btn.getAttribute('data-code');
        bankNameInput.value = btn.getAttribute('data-name');
        modal.classList.add('hidden');
      };
    });
  }

  // Preload maintenance state
  fetchMaintenance();

  openBtn.addEventListener('click', function () {
    modal.classList.remove('hidden');
    bankList.innerHTML = '<div class="text-gray-500 text-sm text-center">Memuat daftar bank...</div>';
    fetchMaintenance().then(renderBankModal);
  });

  closeBtn.addEventListener('click', function () {
    modal.classList.add('hidden');
  });

  modal.addEventListener('click', function (e) {
    if (e.target === modal) modal.classList.add('hidden');
  });

  // --- Popup Ringkasan Transaksi ---
  const showSummaryBtn = document.getElementById('showSummaryBtn');
  const summaryModal = document.getElementById('summaryModal');
  const closeSummaryModal = document.getElementById('closeSummaryModal');
  const summaryContent = document.getElementById('summaryContent');
  const summaryTotal = document.getElementById('summaryTotal');
  const confirmSummaryBtn = document.getElementById('confirmSummaryBtn');
  const form = document.getElementById('transaksiForm');
  const submitBtn = document.getElementById('submitBtn');

  // Fee skema fixed sesuai requirement
  function getAdminFee(nominal) {
    nominal = Number(nominal);
    if (nominal < 10000) return 30;
    if (nominal > 1000000) return 8;
    if (nominal > 750000) return 12;
    if (nominal > 500000) return 15;
    if (nominal > 250000) return 17;
    if (nominal > 100000) return 20;
    if (nominal > 50000) return 25;
    return 30;
  }

  function parseNominal(str) {
    return Number(String(str).replace(/\./g, '').replace(/,/g, '').replace(/\D/g, ''));
  }

  function formatRupiah(angka) {
    if (isNaN(angka)) return '-';
    return 'Rp' + angka.toLocaleString('id-ID');
  }

  showSummaryBtn.addEventListener('click', function (e) {
    e.preventDefault();

    // Validasi manual agar semua required terisi sebelum ringkasan
    let requiredFields = form.querySelectorAll('[required]:not([type=checkbox]):not([type=hidden])');
    let valid = true;
    requiredFields.forEach(function (el) {
      if (!el.value) {
        el.classList.add('border-red-500');
        valid = false;
      } else {
        el.classList.remove('border-red-500');
      }
    });
    // Cek checkbox agreement
    let agreement = document.getElementById('agreement');
    if (!agreement.checked) valid = false;

    if (!valid) {
      alert('Pastikan semua field wajib terisi sebelum melihat ringkasan.');
      return;
    }

    // Ringkasan data
    const role = form.role.value;
    const tujuan = form.tujuan.value;
    const nominalStr = form.nominal.value;
    const nominal = parseNominal(nominalStr);
    const tanggal = form.tanggal.value;
    const buyer = form.buyer.value;
    const seller = form.seller.value;
    const nomor_rekening = form.nomor_rekening ? form.nomor_rekening.value : '';
    const deskripsi = form.deskripsi.value;
    const penanggung_biaya_admin = form.penanggung_biaya_admin.value;
    const bank_code = form.bank_code.value;
    const bank_name = form.bank_name.value;

    // Hitung fee
    const feePercent = getAdminFee(nominal);
    const feeValue = Math.round(nominal * feePercent / 100);

    // Rincian biaya admin
    let biayaAdminDitanggung = '';
    if (penanggung_biaya_admin === 'pembeli') {
      biayaAdminDitanggung = `<span class="text-indigo-700 font-bold">Pembeli</span>`;
    } else if (penanggung_biaya_admin === 'penjual') {
      biayaAdminDitanggung = `<span class="text-indigo-700 font-bold">Penjual</span>`;
    } else {
      biayaAdminDitanggung = `<span class="text-indigo-700 font-bold">Dibagi antara Penjual &amp; Pembeli</span>`;
    }

    // Tampilkan ringkasan
    summaryContent.innerHTML = `
      <table class="w-full text-sm mb-3">
        <tr><td class="py-1 text-gray-500">Sebagai</td><td class="py-1">${role}</td></tr>
        <tr><td class="py-1 text-gray-500">Tujuan</td><td class="py-1">${tujuan}</td></tr>
        <tr><td class="py-1 text-gray-500">Nominal</td><td class="py-1">${formatRupiah(nominal)}</td></tr>
        <tr><td class="py-1 text-gray-500">Tanggal</td><td class="py-1">${tanggal}</td></tr>
        <tr><td class="py-1 text-gray-500">Buyer</td><td class="py-1">${buyer}</td></tr>
        <tr><td class="py-1 text-gray-500">Seller</td><td class="py-1">${seller}</td></tr>
        ${role === 'penjual' ? `<tr><td class="py-1 text-gray-500">Nomor Rekening</td><td class="py-1">${nomor_rekening}</td></tr>` : ''}
        <tr><td class="py-1 text-gray-500">Deskripsi</td><td class="py-1">${deskripsi}</td></tr>
        <tr><td class="py-1 text-gray-500">Bank Pencairan</td><td class="py-1">${bank_name} (${bank_code.toUpperCase()})</td></tr>
        <tr><td class="py-1 text-gray-500">Biaya Admin (%)</td><td class="py-1">${feePercent}%</td></tr>
        <tr><td class="py-1 text-gray-500">Total Biaya Admin</td><td class="py-1">${formatRupiah(feeValue)}</td></tr>
        <tr><td class="py-1 text-gray-500">Penanggung Biaya Admin</td><td class="py-1">${biayaAdminDitanggung}</td></tr>
      </table>
      <div class="text-xs text-gray-500 border-t pt-2 mt-2">
        Pastikan seluruh data di atas sudah benar sebelum submit. Jika ada kesalahan, klik tutup dan perbaiki data.
      </div>
    `;

    // Hitung total yang harus dibayar
    let totalBayar = nominal;
    if (penanggung_biaya_admin === "pembeli") {
      totalBayar += feeValue;
    } else if (penanggung_biaya_admin === "dibagi") {
      totalBayar += Math.ceil(feeValue / 2);
    }
    // Penjual: total tetap nominal (fee diambil dari hasil pencairan)

    summaryTotal.innerHTML = `
      <div class="text-xl font-bold text-gray-800 mb-2">TOTAL YANG HARUS DIBAYARKAN</div>
      <div class="text-3xl font-extrabold text-indigo-700 mb-2">${formatRupiah(totalBayar)}</div>
      <div class="text-xs text-gray-500">${penanggung_biaya_admin === 'pembeli'
        ? 'Total = Nominal + Biaya Admin'
        : (penanggung_biaya_admin === 'dibagi'
          ? 'Total = Nominal + ½ Biaya Admin'
          : 'Total = Nominal (biaya admin dipotong dari hasil penjual)'
        )}</div>
    `;

    summaryModal.classList.remove('hidden');
  });

  closeSummaryModal.addEventListener('click', function () {
    summaryModal.classList.add('hidden');
  });

  confirmSummaryBtn.addEventListener('click', function () {
    summaryModal.classList.add('hidden');
    submitBtn.click();
  });
});
</script>

@endsection