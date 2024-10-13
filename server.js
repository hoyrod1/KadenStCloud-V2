const path = require("path");
const express = require("express");
const app = express();
const port = 7373;
app.use(express.static(path.join(__dirname)));
app.use(express.static("members"));
app.listen(port);
