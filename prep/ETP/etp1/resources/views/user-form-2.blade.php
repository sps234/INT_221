<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <form action="/addUser2" method="POST">
        @csrf
        <div>
            <h5> User Skill </h5>
            <input type="checkbox" value="PHP" name="skill[]" id="php">
            <label for="php"> PHP </label>
            <input type="checkbox" value="Node" name="skill[]" id="node">
            <label for="node"> Node </label>
            <input type="checkbox" value="Java" name="skill[]" id="java">
            <label for="java"> Java </label>
        </div>
        <br><br>

        <div>
            <h5> Gender </h5>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male"> Male </label>

            <input type="radio" name="gender" value="female" id="female">
            <label for="female"> Female </label>
        </div>
        <br><br>

        <div>
            <h5> City </h5>
            <select name="city" id="city">
                <option value="Delhi"> Delhi </option>
                <option value="Mumbai"> Mumbai </option>
                <option value="Bangalore"> Bangalore </option>
            </select>
        </div>
        <br><br>

        <div>
            <input type="range" name="age" min="18" max="100">
        </div>
        <br><br>

        <div>
            <input type="submit" value="Submit">
        </div>

    </form>
</div>
