<div class="booking-section container">
    <h2 class="booking-header">Book Your Journeys</h2>
    <form class="booking-form" action="#" method="POST">
        <!-- Destination -->
        <div class="form-group">
            <label class="form-label" for="destination">Destination</label>
            <select id="destination" class="form-select" name="destination" required>
                <option value="" disabled selected>Select your destination</option>
                <option value="paris">Paris, France</option>
                <option value="tokyo">Tokyo, Japan</option>
                <option value="newyork">New York, USA</option>
                <option value="cape_town">Cape Town, South Africa</option>
                <option value="sydney">Sydney, Australia</option>
            </select>
        </div>

        <!-- Travel Date -->
        <div class="form-group">
            <label class="form-label" for="date">Travel Date</label>
            <input type="date" id="date" class="form-input" name="travel_date" required>
        </div>

        <!-- Number of Travelers -->
        <div class="form-group">
            <label class="form-label" for="travelers">Number of Travelers</label>
            <input type="number" id="travelers" class="form-input" name="travelers" min="1" max="10" value="1" required>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label class="form-label" for="email">Email Address</label>
            <input type="email" id="email" class="form-input" name="email" placeholder="you@example.com" required>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="submit-button">Book Now</button>
        </div>
    </form>
</div>
