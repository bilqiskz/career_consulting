<!-- 

A concept for a chat interface. 

Try writing a new message! :)


Follow me here:
Twitter: https://twitter.com/thatguyemil
Codepen: https://codepen.io/emilcarlsson/
Website: http://emilcarlsson.se/

-->
<?= $this->extend('layout/chat'); ?>


<?= $this->section('chat'); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-analytics.js"></script>

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyCOXw2lNIZlTtzqvruzHE9WIX1ICFzLu5E",
        authDomain: "konsultasi-karir-bk.firebaseapp.com",
        projectId: "konsultasi-karir-bk",
        storageBucket: "konsultasi-karir-bk.appspot.com",
        messagingSenderId: "849646058293",
        appId: "1:849646058293:web:4e0958af089f3f260c6a7c",
        measurementId: "G-X7ZBXC2505"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>
<script>
    var myName = "<?= user()->username; ?>";
    var yourName = "<?= $riwayat->username ?>";

    firebase.database().ref("riwayatkonsul").on("child_added", function(snapshot) {
        var html = "";
        const message = snapshot.val()
        const time = snapshot.val().tanggal_berakhir

        const chatActors = [myName, yourName]
        const messageActors = snapshot.val().user

        // Array nya di sort() dulu agar menghindari [A, B] tidak sama dengan [B, A]
        chatActors.sort()
        messageActors.sort()

        // Tampilkan pesan jika actor sesuai dengan yang ada dalam database
        if (time) {
            if (chatActors.toString() === messageActors.toString()) {
                if (message.sender === myName) {
                    html += "<li class='replies'>";
                    html += "<img src='<?= base_url(); ?>/assets/images/siswa/<?= user()->user_image; ?>'/>";
                    html += "<p>";
                    html += `${ message.sender } : <br>${ message.message }`;
                    html += `<small>${ message.waktu }</small>`;
                    html += "</p>";
                } else if (message.sender === yourName) {
                    html += "<li class='sent'>";
                    html += "<img src='<?= base_url('assets/images/guru/' . $riwayat->user_image); ?>'/>";
                    html += "<p>";
                    html += `${message.sender} : <br>${message.message}`;
                    html += "<small>" + snapshot.val().waktu + "</small>";
                    html += "</p>";
                }
            }
        }
        html += "</li>";

        document.getElementById("messages").innerHTML += html;
    });
</script>
<script>
    //  var myName = "< user()->username; ?>";
    // TODO: $guruu sama guruName ganti namanya jadi receiver atau apalah biar gampang
    // var userName = "< $riwayat->username ?>";
    // var user = array($guruName, myName);

    // firebase.database().ref("messages").on("child_added", function(snapshot) {
    //         //get message
    //         var message = snapshot.val().message;
    //         var waktu = snapshot.val().waktu;
    //         var user = snapshot.val().user;
    //         var waktuu = new Date(Date.now()).toString();

    //         if ($.trim(message) == '') {
    //             return false;
    //         }
    //         $('.message-input input').val(null);
    //         //save in database
    //         firebase.database().ref("riwayatkonsul/" + waktuu).push().set({
    //             "sender": myName,
    //             "receiver": userName,
    //             "message": message,
    //             "waktu": waktu,
    //             "user": user
    //         });

    //         return false;
    //     });
</script>

<div class="container">
    <div id="frame" class="shadow">
        <div class="content">
            <div class="contact-profile">
                <img src="<?= base_url('assets/images/guru/' . $riwayat->user_image); ?>" alt="" />
                <p><?= $riwayat->fullname; ?></p>
            </div>
            <div class="messages">
                <ul id="messages">

                    </li>
                </ul>
            </div>

            <div class="message-input">
                <div class="wrap">
                    <div class="alert alert-success text-center" role="alert">
                        Sesi konseling ini telah berakhir, anda tidak bisa mengirim pesan lagi. Silakan mulai konsultasi baru.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->


<?= $this->endSection(); ?>