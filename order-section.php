<div class="row bg-primary" id="form">
        <div class="col-md-6 bg-primary d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column text-start p-5">
                <h1 class="fw-bold mb-4 text-white">Tertarik untuk membersihkan Laptop mu?</h1>
                <p class="text-white mb-4 fw-normal">Tunggu apalagi? panggil kami dengan mengisi formulir berikut dan kami akan menjemput laptop anda.</p>

                <div class="d-flex align-items-center mb-3">
                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                        <i class="fa-solid fa-check text-primary"></i>
                    </div>
                    <p class="text-white mb-0">Tidak Perlu datang - Kami Jemput</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                        <i class="fa-solid fa-money-bill-wave text-primary"></i>
                    </div>
                    <p class="text-white mb-0">Ramah Kantong - Tidak ada Pajak dan Ongkir</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                        <i class="fa-solid fa-shield-halved text-primary"></i>
                    </div>
                    <p class="text-white mb-0">Garansi up to 6-Hari</p>
                </div>
            </div>
        </div>

        <!-- Form Servis -->
        <div class="col-md-6 bg-primary">
            <div class="p-4 p-md-5">
                <form class="bg-white p-4 rounded-3">
                    <h6 class="text-dark mb-4 fw-bold">Request a repair visit</h6>

                    <div class="mb-3">
                        <label for="fullName" class="form-label text-secondary form-text">Nama</label>
                        <input type="text" class="form-control" id="fullName" required>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="phone" class="form-label text-secondary form-text">No Telp (Whatsapp)</label>
                            <input type="tel" class="form-control small-italic-placeholder" id="phone" placeholder="0857XXXXXXX" required>
                        </div>
                        <div class="col-md-6">
                            <label for="room" class="form-label text-secondary form-text">Kamar / Alamat</label>
                            <input type="text" class="form-control small-italic-placeholder" id="room" placeholder="Pavi BX-XX" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="package" class="form-label text-secondary form-text">Pilih Paket</label>
                        <select class="form-control" id="package" required>
                            <option value="BASIC">BASIC CLEANING</option>
                            <option value="CLEANING+">CLEANING+</option>
                            <option value="INSTALL-ULANG">INSTALL ULANG</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="issueDescription" class="form-label text-secondary form-text">Jelaskan masalah laptop Anda</label>
                        <textarea class="form-control" id="issueDescription" rows="4" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-medium">Panggil Kami</button>
                </form>
            </div>

            <script>
                
            // Add this JavaScript code at the end of your HTML file before the closing </body> tag

            document.addEventListener('DOMContentLoaded', function() {
                // Get the form element
                const form = document.querySelector('form');
                
                // Add submit event listener to the form
                form.addEventListener('submit', function(event) {
                    // Prevent the default form submission
                    event.preventDefault();
                    
                    // Get form values
                    const name = document.getElementById('fullName').value.trim();
                    const phone = document.getElementById('phone').value.trim();
                    const room = document.getElementById('room').value.trim();
                    const package = document.getElementById('package').value.trim();
                    const issue = document.getElementById('issueDescription').value.trim();
                    
                    // Validate form
                    if (!name || !phone || !room || !package || !issue) {
                        alert('Harap isi semua kolom formulir');
                        return;
                    }
                    
                    // Format the message for WhatsApp
                    const whatsappMessage = `
            *Benerinaja.id service request*
            ----------------------------
            *Nama:* ${name}
            *No Telp:* ${phone}
            *Kamar/Alamat:* ${room}
            *Paket Layanan:* ${package}
            *Deskripsi Masalah:* ${issue}
            ----------------------------
                    `.trim();
                    
                    // Replace with the phone number that will receive messages (include country code)
                    const whatsappNumber = "628561549323"; // Example: Replace with your actual number
                    
                    // Create the WhatsApp URL with the message
                    const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
                    
                    // Open WhatsApp in a new tab
                    window.open(whatsappURL, '_blank');
                });
            });
            </script>

        </div>
    </div>