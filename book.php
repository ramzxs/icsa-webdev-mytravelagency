<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTravelAgency | Book Now</title>
</head>
<body>
    <header>
        <strong>MyTravelAgency</strong>
        <hr>
    </header>

    <main>
        <h1>BOOKING</h1>
        
        <form action="?">
            <section>
                <h2>CLIENT</h2>
                <div>
                    <label for="">Name:</label>
                        <input type="text" size="50">
                </div>
                <div>
                    <label for="">Mobile Number:</label>
                        <input type="text" size="12">
                </div>
                <div>
                    <label for="">Email Address:</label>
                        <input type="email" size="50">
                </div>
                <div>
                    <label for="">Adults:</label>
                    <input type="number" name="" id="">
                </div>
                <div>
                    <label for="">Children:</label>
                    <input type="number" name="" id="">
                </div>
            </section>

            <section>
                <h2>FLIGHT</h2>

                <div>
                    <label for="">Date of Departure:</label>
                        <input type="date">
                </div>
                <div>
                    <label for="">Destination:</label>
                    <select name="" id="">
                        <option value="">(Select)</option>
                        <option value="">Manila</option>
                        <option value="">Cebu</option>
                        <option value="">Davao</option>
                    </select>
                </div>
                <div>
                    <label for="">Preferred Airline:</label>
                    <select name="" id="">
                        <option value="">(Select)</option>
                        <option value="">AirAsia</option>
                        <option value="">Cebu Pacific</option>
                        <option value="">Philippine Airlines</option>
                    </select>
                </div>
            </section>


            <section>
                <h2>HOTEL</h2>

                <div>
                    <label for="">Room Class:</label>
                    <select name="" id="">
                        <option value="">(Select)</option>
                        <option value="">Economy</option>
                        <option value="">Standard</option>
                        <option value="">Deluxe</option>
                        <option value="">Couple</option>
                        <option value="">Family</option>
                        <option value="">Suite</option>
                    </select>
                </div>
                <div>
                    <label for="">Number of Days:</label>
                    <input type="number" name="" id="">
                </div>
                <div>
                    <label for="">Number of Nights:</label>
                    <input type="number" name="" id="">
                </div>
            </section>
        </form>
    </main>

    <footer>
        <hr>
        &copy; 2023 MyTravelAgency, Inc.
    </footer>
</body>
</html>