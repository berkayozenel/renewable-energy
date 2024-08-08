<template>
    <div class="overlay"></div>
    <form action="#">
        <div class="form-container">
            <div class="form-header">
                <div class="form-title">
                    <h3>Renova Energie</h3>
                    <h1>Gemeinden</h1>
                </div>
                <div class="icon">
                    <span><i class="fa-solid fa-x"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="form-element">
                    <label for="name">Vorname Familienname</label>
                    <input type="text" name="name" placeholder="Schreiben Sie Ihren Vor- und Nachnamen">
                </div>
                <div class="form-element">
                    <label for="phone">Handynummer</label>
                    <input type="number" name="phone">
                </div>
            </div>
            <div class="form-group">
                <div class="form-element">
                    <label for="email">E-mail</label>
                    <input type="email" name="email">
                </div>
                <div class="form-element">
                    <label for="city">Stadt</label>
                    <select name="city" id="city">
                        <option value="null">--Wählen--</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-element">
                    <label for="city">Bezirk</label>
                    <select name="city" id="city">
                        <option value="null">--Wählen--</option>
                    </select>
                </div>
                <div class="form-element">
                    <label for="city">Stationstyp</label>
                    <select name="city" id="city">
                        <option value="null">--Wählen--</option>
                        <option value="AC">AC-Ladestation</option>
                        <option value="null">DC-Hochgeschwindigkeitsladestation</option>
                    </select>
                </div>
            </div>
            <div class="form-textarea">
                <label for="text">Erläuterung</label>
                <textarea name="text" id="text"></textarea>
            </div>
            <div class="form-controls">
                <button>Schicken</button>
            </div>
        </div>
    </form>
</template>
