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
    // TODO: $they sama yourName ganti namanya jadi receiver atau apalah biar gampang
    var yourName = "<?= $they->username ?>";
    // var user = array($yourName, myName);

    function sendMessage() {
        //get message
        var message = document.getElementById("messaage").value;
        var waktu = new Date(Date.now()).toString();

        if ($.trim(message) == '') {
            return false;
        }
        $('.message-input input').val(null);
        //save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "receiver": yourName,
            "message": message,
            "waktu": waktu,
            "user": [myName, yourName]
        });

        return false;

    }

    //listen for incoming messages
    firebase.database().ref("messages").on("child_added", function(snapshot) {
        var html = "";
        //give each message an unique id
        const message = snapshot.val()

        const chatActors = [myName, yourName]
        const messageActors = snapshot.val().user
        // const messageActors = 'ini akan jadi error'

        // Array nya di sort() dulu agar menghindari [A, B] tidak sama dengan [B, A]
        chatActors.sort()
        messageActors.sort()

        // Tampilkan pesan jika actor sesuai dengan yang ada dalam database
        if (chatActors.toString() === messageActors.toString()) {
            if (message.sender === myName) {
                html += "<li class='replies'>";
                html += "<img src='<?= base_url(); ?>/assets/images/siswa/<?= user()->user_image; ?>'/>";
                html += "<p>";
                html += `${ message.sender } : <br>${ message.message }`;
                // TODO: gabungin string pake Template Literal semua biar gampang dibacanya
                // Cara lain buat gabungin string, namanya Template Literal
                html += `<small>${ message.waktu }</small>`;
                html += "</p>";
            } else if (message.sender === yourName) {
                html += "<li class='sent'>";
                html += "<img src='<?= base_url('assets/images/guru/' . $they->user_image); ?>'/>";
                html += "<p>";
                html += `${message.sender} : <br>${message.message}`;
                html += "<small>" + snapshot.val().waktu + "</small>";
                html += "</p>";
            }
        }

        html += "</li>";

        //show delete button
        // if (snapshot.val().sender == myName) {
        //     html += "<button data-id='" + snapshot.key + "'onClick='deleteMessage(this);'>";
        //     html += "Delete";
        //     html += "</button>";
        // }

        document.getElementById("messages").innerHTML += html;

        // function deleteMessage(self) {
        //     //get message id
        //     var messageId = self.getAttribute("data-id");

        //     //delete message
        //     firebase.database().ref("messages").child(messageId).remove();
        // }

        // //attach listener for delete message
        // firebase.database().ref("messages").on("child_removed", function(snapshot) {
        //     //remove message node
        //     document.getElementById("message-" + snapshot.key).innerHTML = "tlah dihapus";
        // });

    });
</script>
<script>
    function riwayat() {
        var myName = "<?= user()->username; ?>";
        // TODO: $they sama yourName ganti namanya jadi receiver atau apalah biar gampang
        var userName = "<?= $they->username ?>";
        // var user = array($yourName, myName);

        firebase.database().ref("messages").on("child_added", function(snapshot) {
            const message = snapshot.val().message

            const receiver = userName
            const sender = myName
            const _receiver = snapshot.val().receiver
            const _sender = snapshot.val().sender
            const chatActors = [myName, userName]
            const messageActors = snapshot.val().user
            // const messageActors = 'ini akan jadi error'

            // Array nya di sort() dulu agar menghindari [A, B] tidak sama dengan [B, A]
            chatActors.sort()
            messageActors.sort()

            var waktuu = new Date(Date.now()).toString();
            var waktu = snapshot.val().waktu;

            if ($.trim(message) == '') {
                return false;
            }
            $('.message-input input').val(null);
            //save in database
            if (chatActors.toString() === messageActors.toString()) {
                firebase.database().ref("riwayatkonsul").push().set({
                    "sender": _sender,
                    "receiver": _receiver,
                    "message": message,
                    "waktu": waktu,
                    "tanggal_berakhir": waktuu,
                    "user": messageActors
                });
                const ref = firebase.database().ref("messages")
                ref.orderByChild('receiver').equalTo(receiver).on('child_added', snapshot => {
                    snapshot.ref.remove()

                    ref.orderByChild('sender').equalTo(receiver).on('child_added', snapshot => {
                        snapshot.ref.remove()
                    })
                })

            }
            return false;
        });
        // firebase.database().ref("riwayatkonsul").on("child_added", function(snapshot) {
        //     var riwkon = snapshot.val().tanggal_berakhir
        //     var timee = new Date(Date.now()).toString();

        // });
    }
</script>

<div class="container">
    <div id="frame" class="shadow">
        <div class="content">
            <div class="contact-profile">
                <img src="<?= base_url('assets/images/guru/' . $they->user_image); ?>" alt="" />
                <p><?= $they->fullname; ?></p>

                <?php if (in_groups('guru')) : ?>
                    <div class="social-media pr-5 mt-2">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#akhirikonsul">Akhiri Konsultasi</button>
                    </div>
                <?php endif; ?>

            </div>
            <div class="messages">
                <ul id="messages">

                    </li>
                </ul>
            </div>

            <form onsubmit="return sendMessage();">
                <div class="message-input" id="sembunyi">
                    <div class="wrap">
                        <input type="text" id="messaage" placeholder="Write your message..." autocomplete="off" />
                        <!-- <i class="fa fa-paperclip attachment" aria-hidden="true"></i> -->
                        <button class="submit" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="akhirikonsul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Apakah Anda yakin untuk mengakhiri konsultasi ini?<br>
                <div class="mt-3">
                    <button class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                    <a onclick="riwayat()" class="btn btn-danger" href="<?= base_url('/guru_konseling'); ?>">Akhiri</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- href="< base_url('dashboard/riwayat/' . $id); ?>" -->
<?= $this->endSection(); ?>