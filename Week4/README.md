# Week 4

## 1. Waa Maxay Superglobals?
Superglobals waa nooc gaar ah oo ka mid ah doorsoomayaasha PHP kuwaas oo horay ugu dhex dhisnaa luuqadda (built-in variables). 
* Waxa ay kaga duwan yihiin kuwa caadiga ah waa in ay leeyihiin awood caalami ah (Global Scope).
* Taas macnaheedu waxa weeye: meel kasta oo barnaamijkaaga ka mid ah—ha ahaato bannaanka, gudaha functions-ka, ama faylal kala duwan—toos ayaad xogtooda u heli kartaa adigoon wax oggolaansho ah u baahan.

---

## 2. Farqiga u Dhexeeya Globals iyo Superglobals

* **Globals (Doorsoomayaasha Caadiga ah):**
  Waa variables-ka aad adigu samaysato ee ku yaalla bannaanka functions-ka. Haddii aad rabto inaad function gudihiisa kaga dhex shaqaysato, luuqadda PHP waxay ku khasbaysaa inaad marka hore ku dhawaaqdo ama aad u sheegto inay yihiin global, haddii kale function-ku ma aqoonsanayo.

* **Superglobals:**
  Uma baahna wax ku dhawaaqis ah ama oggolaansho. Mar walba iyo meel walba waxay u furan yihiin in xogta laga akhriyo ama lagu kaydiyo, sababtoo ah nidaamka PHP ayaa si toos ah u maamula.

---

## 3. Doorka `$_POST`
`$_POST` waa mid ka mid ah superglobals-ka ugu caansan PHP, shaqadiisa ugu weynina waa:
* Inuu ururiyo oo uu qabto xogta laga soo diro HTML form marka qaabka dirista loo doorto habka qarsoon ee loo yaqaan POST.
* Xogta lagu soo diro `$_POST` kuma dul muuqato cinwaanka biraawsarka (URL), taas oo ka dhigaysa habka ugu habboon ee loo gudbiyo xogaha xasaasiga ah sida furayaasha sirta ah (passwords) ama xogaha qoraallada dhaadheer.

---

## 4. Passing by Value (Gudbinta Nuqulka Qiimaha)
Marka xogta (argument) loo dirayo function qaab "Value" ah:
* Waxa function-ka loo diraa nuqul (copy) gooni ah oo laga soo qaaday qiimaha variable-ka asalka ah.
* Haddii function-ka gudihiisa wax looga beddelo qiimihii la soo dhiibay, **wax saameyn ah kuma yeelanayo** variable-kii asalka ahaa ee bannaanka joogay. Asalkii sidisii ayuu ahaanayaa, maxaa yeelay nuqul u gaar ah ayaa la mashquuliyay.

---

## 5. Passing by Reference (Gudbinta Asalka / Cinwaanka Xusuusta)
Marka xogta loo dirayo function qaab "Reference" ah:
* Looma diro nuqul cusub, balse waxa toos loola xiriiriyaa cinwaanka rasmiga ah ee variable-ka asalka ahi kaga jiro xusuusta kombiyuutarka.
* Haddii function-ka gudihiisa wax laga beddelo xogtaas, **isbeddelkaasi wuxuu toos u taabanayaa variable-kii asalka ahaa** ee bannaanka yaallay, isaguna wuu isbeddelayaa, sababtoo ah labaduba hal xog oo isku meel taalla ayay wadaagayeen.