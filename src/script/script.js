// const result = [
//     {
//         "hallo": {text: "สวัสดี", voice: "S̄wạs̄dī"},
//         "wofinde": {text: "เจอได้ที่ไหน", voice: "Cxe xīd thī h̄ı̀n"},
//         "etwas": {text: "บางสิ่ง", voice: "Bāng s̄iṅ"},
//         "danke": {text: "ขอบคุณ", voice: "Khxb khun"},
//         "bitte": {text: "โปรด", voice: "Phrxd"},
//         "essen": {text: "กิน", voice: "Kin"},
//         "trinken": {text: "ดื่ม", voice: "Dụm"},
//         // Weitere Begriffe können hier hinzugefügt werden
//     }
// ];

// document.getElementById("textarea1").addEventListener("input", () => {
//     let inputText = document.getElementById("textarea1").value.toLowerCase();
//     let words = inputText.split(/\s+/); // Teile den Eingabetext in Wörter auf

//     let resultInBox = document.getElementById("textarea2");
//     let voiceInBox = document.getElementById("voice_");
    
//     // Ergebnisse für jedes Wort sammeln
//     let translations = words.map(word => {
//         let matchingEntry = result.find(obj => Object.keys(obj).some(key => word.includes(key)));
//         return matchingEntry ? matchingEntry[Object.keys(matchingEntry)[0]] : { text: "", voice: "" };
//     });

//     // Zeige die Ergebnisse an
//     resultInBox.innerText = translations.map(t => t.text).join(" ");
//     voiceInBox.innerText = translations.map(t => t.voice).join(" ");
// });
