
<?php
$page_title = "Register";
$page_heading = "Join Ereteti Dairy Sacco";


$message  = "";
if( 
    $_SERVER["REQUEST_METHOD"] == "POST")
    {
        $first_name= htmlspecialchars($_POST["first_name"] ?? "");
        $last_name= htmlspecialchars($_POST["last_name"] ?? "");
        $national_id=htmlspecialchars($_POST["national_id"] ?? "");
        $phone=htmlspecialchars($_POST["phone"] ?? "");
        $route=htmlspecialchars($_POST["route"] ?? "");
        $date_joined=htmlspecialchars($_POST["date_joined"] ?? "");

        $message = "Application received. Thank you for your interest in joining Ereteti Dairy Sacco,
         $first_name $last_name. We will contact you on $phone once your application is processed.";
    }
    include 'includes/header.php';
?>

        
       
    <main>
        <h1> Apply For Membership </h1>
        <p>Milk collected twice a day, on three routes out of Ngong.</p>
        <?php
        if($message !== ""): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>

        <p>
            Any dairy farmer within reach of one of our three routes
              may apply to join Ereteti. You will need your national ID
              number and a phone we can reach you on. Once your
              membership number is issued you may deliver from that day,
              and you are paid once a month for the litres we accept 
        </p>
        <form action="process-register.php" method="post">
            <fieldset>
                <legend>Your details</legend>
            
            <label for="fname">First Name </label>
                <input type="text" id="fname" name = "first_name" required>
            <label for="lname">Last Name </label>
                <input type="text" id="lname" name="last_name">
            <label for="id">National ID </label>
                <input type="text" id="id" name = "national_id" required>
            <label for="phone">Phone </label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone"
                    placeholder="07xxxxxxxx"
                    pattern="07[0-9]{8}"
                    title="Ten digits, starting 07"
                    required
                >
           </fieldset>
           <fieldset>
            <legend>Your Route</legend>
            <label for="routes">Route</label>
            <select name="route" id="routes">
                <option value="">Choose a route</option>
                <option value="1">Kiserian</option>
                <option value="2">Ngong</option>
                <option value="3">Rongai</option>
            </select>
            <label for="date">Date Of Joining</label>
            <input type="date" id="date" max="2026-09-24" name="date_joined">
           </fieldset>
           <label for="rules">
            <input type="checkbox" id="rules" name="rules" required>
            I accept the sacco's rules
            </label>
        <button type="submit">Apply to join</button>

        </form>
    </main>

    <aside>
<h2>Notices</h2>
<ul>
<li>Milk is paid at <strong>KSh 52.00 a litre</strong> from
1 October 2026.</li>
<li>Annual General Meeting: Saturday 17 October, 10 a.m., at the
Kiserian collection centre.</li>
<li>New members: <a href="register.html">apply to join</a>. You need
a national ID and a bank account.</li>
</ul>
</aside>

<?php include 'includes/footer.php'; ?>