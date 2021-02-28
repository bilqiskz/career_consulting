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
    // contoh data yang ada di firebase (snapshot)
    const messages = [{
            // receiver, sender, message itu namanya key yah :3
            // dan isinya itu namanya value
            receiver: 'onit',
            sender: 'rohan',
            message: 'haloooo',
            users: ['onit', 'rohan']
        },
        {
            receiver: 'rohan',
            sender: 'onit',
            message: 'halo juga',
            users: ['rohan', 'onit']
        },
        {
            receiver: 'onit',
            sender: 'rohan',
            message: 'lagi apa',
            users: ['onit', 'rohan']
        },
        {
            receiver: 'rohan',
            sender: 'onit',
            message: 'gpp',
            users: ['onit', 'rohan']
        },
    ]

    // User ini (yg login) dan user sana lawan bicara misalnya
    const thisUser = 'rohan'
    const thatUser = 'onit'
    const chatUsers = [thisUser, thatUser]

    // Ini sebuah fungsi yang pas dijalankan membalikan data dalam bentuk Object kaya sepert pada di Firebase
    function getMessageData(snapshot) {
        //Ini namanya object deconstruction, jadi semua key object kita jadikan variabel :3
        const {
            receiver,
            sender,
            message,
            users
        } = snapshot

        // kembalikan dalam bentuk object kaya diatas
        return {
            //Ini itu versi singkat dari "receiver: receiver", karena sama bisa langsung dituliskan receiver
            receiver,
            sender,
            message,
            users,
        }
    }

    // ini data array, kita inisialisasikan dulu :3
    const dataArray = []

    // ini simulasi yang kaya kemarin doang ya :3
    messages.forEach((snapshot) => {

        // Ini logika buat nampilinnya kaya kemarin tea :3
        if (snapshot.users.sort().toString() === chatUsers.sort().toString()) {

            // Jika Actornya benar kita ambil datanya pake fungsi tadi, dan masukin ke dalam variabel dataArray yang tadi
            dataArray.push(getMessageData(snapshot))

            // liat Console buat tampilannya :3
            if (snapshot.sender === thisUser) {
                console.log(`     [${ snapshot.sender }: ${ snapshot.message }]`)

            } else if (snapshot.sender === thatUser) {
                console.log(`[${ snapshot.sender }: ${ snapshot.message }]`)
            }
        }
    })

    // Udah beres kan ini loopingnya, saatnya cek isi arraynya :3

    // Jika udah paham code diatas uncomment log dibawah ini buat liat isi arraynya

    /* console.log(dataArray) */
</script>