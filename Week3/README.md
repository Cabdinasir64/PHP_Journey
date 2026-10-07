# Week 3 Casharadiisa: Barashada Arrays

Faylkan wuxuu koobayaa casharadii usbuuca 3aad, kuwaas oo si qoto dheer uga hadlaya barashada **Arrays**

---

## 1. Waa maxay Array?
Array waa nooc ka mid ah 'Variable' kaas oo awood u leh in uu hal mar wada qaado (ama lagu wada keydiyo) xog (values) ka badan hal xabbo. 

Halkii aad isicmaali lahayd doorsoomayaal (variables) badan si aad u keydiso xog isku nooc ah (Tusaale: 10 magac oo arday ah), waxaad si fudud u abuuri kartaa hal Array oo gudihiisa wada xambaarsan dhammaan 10-kaas magac. Tani waxay sahlaysaa in xogta si fudud loo maamulo, loo dhex maro, loona raadiyo.

---

## 2. Qeybaha Arrays-ka (Types of Arrays)
Arrays-ku waxay u kala baxaan saddex qeybood oo aasaasi ah, iyadoo lagu salaynayo sida xogta loo keydiyo loogana dhex yeero:

*   **Indexed Arrays (Array-ga Nambarada leh):**
    Waa nooca ugu caansan ee Array. Xogta ku jirta Array-gan waxaa lagu aqoonsadaa nambaro loo yaqaano "Index". Nambarinta Index-ku waxay mar walba ka bilaabataa **0** (eber), ma ahan 1. Sidaas darteed, xogta ugu horeysa ee array-ga ku jirta waa index 0, midda ku xigtana waa index 1, iwm.

*   **Associative Arrays (Array-ga Magacyada leh):**
    Noocan waa ka duwan yahay Indexed Array, maxaa yeelay baddalkii uu nambaro (0, 1, 2) adeegsan lahaa si xogta loogu yeero, wuxuu adeegsadaa Magacyo aad adiga u bixisay oo loo yaqaano "Keys". Xog kasta waxay leedahay 'Key' (furaha lagu aqoonsado) iyo 'Value' (qiimaha uu xambaarsan yahay). Waa nidaam ku wanaagsan xogta u baahan micne gaar ah (Tusaale: key="Magac", value="Cali").

*   **Multidimensional Arrays (Two-dimensional Arrays):**
    Waa xaalad uu Array weyn gudihiisa ay ku jiraan Arrays kale oo yaryar. "Two-dimensional array" waa qaab u eg shaxan ama miis (Table) oo ka kooban safaf (rows) iyo tiirar (columns). Waxaa inta badan loo isticmaalaa in lagu keydiyo xog kakan (complex data) sida xogta hal arday oo ka kooban (ID-giisa, Magaciisa, iyo Dhibcihiisa) oo dhamaantood ku dhex jira hal Array oo weyn oo ardayda fasalka wada haya.

---

## 3. Array Functions (Functions-ka muhiimka ah ee Array)
Si loo maamulo xogta ku jirta Arrays-ka, luqaduhu waxay leeyihiin functions diyaarsan (built-in) oo shaqooyin kala duwan qabta. Kuwa ugu muhiimsan ee casharada la xiriira waxaa kamid ah:

1.  **count()**
    Function-kani waxa uu qabtaa in uu soo tiriyo inta xabbo (elements) ee ku dhex jirta Array-ga. Haddii array-gu leeyahay shan magac, function-kani wuxuu soo celinayaa lambarka 5. Waa lagu ogaadaa cabbirka (size) array-ga.

2.  **is_array()**
    Shaqadiisu waa hubin. Wuxuu baaraa variable-ka la siiyay in uu yahay Array iyo in kale. Natiijada uu soo celiyo waa *True* (Haddii uu yahay array) ama *False* (Haddii uusan ahayn array).

3.  **in_array()**
    Function-kani waa mid wax raadiya (Search function). Wuxuu qaataa laba shay: Qiimaha (value) aad raadinayso iyo Array-ga aad ka dhex raadinayso. Wuxuu kuu xaqiijinayaa in qiimahaas uu ku dhex jiro array-ga (wuxuuna soo celinayaa True) ama inuusan ku jirin (wuxuuna soo celinayaa False).

4.  **array_push()**
    Wuxuu qabtaa shaqo lagu daro xog cusub. Marka aad rabto in aad xog ama qiimo cusub ku darto Array horay u jiray, function-kani xogtaas wuxuu geynayaa **dhamaadka ugu dambeeya** ee Array-ga.

5.  **array_pop()**
    Waa caksiga *array_push*. Function-kani wuxuu ka tirtiraa (ama ka saaraa) xogta ama element-iga **ugu dambeeya** ee ku jira Array-ga.

6.  **array_merge()**
    Haddii aad heyso laba Array (ama ka badan) oo kala duwan, function-kani wuxuu isku darayaa (merge) xogtooda si ay u noqdaan hal Array oo weyn.