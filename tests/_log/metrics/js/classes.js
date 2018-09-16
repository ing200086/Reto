var classes = [
    {
        "name": "Ing200086\\Reto\\Graph",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "FromJson",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "indexOrEmpty",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "vertices",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "edges",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "trace",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 4,
        "nbMethodsPrivate": 1,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 2,
        "nbMethodsSetters": 0,
        "wmc": 7,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "Ing200086\\Reto\\Vertex\\Collection",
            "Ing200086\\Reto\\EdgeCollection",
            "self",
            "Ing200086\\Reto\\Vertex\\Collection",
            "self",
            "Ing200086\\Reto\\EdgeCollection",
            "static"
        ],
        "parents": [],
        "lcom": 3,
        "length": 36,
        "vocabulary": 9,
        "volume": 114.12,
        "difficulty": 3.71,
        "effort": 423.86,
        "level": 0.27,
        "bugs": 0.04,
        "time": 24,
        "intelligentContent": 30.72,
        "number_operators": 10,
        "number_operands": 26,
        "number_operators_unique": 2,
        "number_operands_unique": 7,
        "cloc": 0,
        "loc": 35,
        "lloc": 35,
        "mi": 51.64,
        "mIwoC": 51.64,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 1.14,
        "relativeSystemComplexity": 26.14,
        "totalStructuralComplexity": 150,
        "totalDataComplexity": 6.83,
        "totalSystemComplexity": 156.83,
        "package": "Ing200086\\Reto\\",
        "pageRank": 0.08,
        "afferentCoupling": 0,
        "efferentCoupling": 4,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "Ing200086\\Reto\\EdgeCollection",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "FromArray",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "create",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "count",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 6,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "Countable",
            "Ing200086\\Envase\\EntityContainer",
            "static",
            "Ing200086\\Reto\\Edge",
            "Ing200086\\Reto\\NewEdge",
            "Ing200086\\Reto\\Edge"
        ],
        "parents": [],
        "lcom": 2,
        "length": 17,
        "vocabulary": 7,
        "volume": 47.73,
        "difficulty": 2.6,
        "effort": 124.09,
        "level": 0.38,
        "bugs": 0.02,
        "time": 7,
        "intelligentContent": 18.36,
        "number_operators": 4,
        "number_operands": 13,
        "number_operators_unique": 2,
        "number_operands_unique": 5,
        "cloc": 10,
        "loc": 38,
        "lloc": 28,
        "mi": 92.09,
        "mIwoC": 56.41,
        "commentWeight": 35.68,
        "kanDefect": 0.38,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 0.43,
        "relativeSystemComplexity": 25.43,
        "totalStructuralComplexity": 125,
        "totalDataComplexity": 2.17,
        "totalSystemComplexity": 127.17,
        "package": "Ing200086\\Reto\\",
        "pageRank": 0.14,
        "afferentCoupling": 1,
        "efferentCoupling": 5,
        "instability": 0.83,
        "violations": {}
    },
    {
        "name": "Ing200086\\Reto\\Vertex\\Collection",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "FromArray",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "create",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "add",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "find",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "remove",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "has",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "count",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "toArray",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 9,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 9,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 10,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "Countable",
            "Ing200086\\Envase\\EntityContainer",
            "static",
            "Ing200086\\Reto\\Vertex\\Single",
            "Ing200086\\Reto\\Vertex\\Single",
            "Ing200086\\Reto\\Vertex\\Single",
            "Ing200086\\Reto\\Vertex\\Single"
        ],
        "parents": [],
        "lcom": 2,
        "length": 32,
        "vocabulary": 7,
        "volume": 89.84,
        "difficulty": 5,
        "effort": 449.18,
        "level": 0.2,
        "bugs": 0.03,
        "time": 25,
        "intelligentContent": 17.97,
        "number_operators": 7,
        "number_operands": 25,
        "number_operators_unique": 2,
        "number_operands_unique": 5,
        "cloc": 20,
        "loc": 65,
        "lloc": 45,
        "mi": 87.86,
        "mIwoC": 49.99,
        "commentWeight": 37.87,
        "kanDefect": 0.38,
        "relativeStructuralComplexity": 64,
        "relativeDataComplexity": 0.63,
        "relativeSystemComplexity": 64.63,
        "totalStructuralComplexity": 576,
        "totalDataComplexity": 5.67,
        "totalSystemComplexity": 581.67,
        "package": "Ing200086\\Reto\\",
        "pageRank": 0.14,
        "afferentCoupling": 1,
        "efferentCoupling": 4,
        "instability": 0.8,
        "violations": {}
    },
    {
        "name": "Ing200086\\Reto\\Vertex\\Single",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "Create",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 1,
        "wmc": 3,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Ing200086\\Envase\\Interfaces\\EntityInterface",
            "static"
        ],
        "parents": [],
        "lcom": 2,
        "length": 9,
        "vocabulary": 4,
        "volume": 18,
        "difficulty": 3,
        "effort": 54,
        "level": 0.33,
        "bugs": 0.01,
        "time": 3,
        "intelligentContent": 6,
        "number_operators": 3,
        "number_operands": 6,
        "number_operators_unique": 2,
        "number_operands_unique": 2,
        "cloc": 0,
        "loc": 17,
        "lloc": 17,
        "mi": 64.24,
        "mIwoC": 64.24,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.67,
        "relativeSystemComplexity": 2.67,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 8,
        "totalSystemComplexity": 8,
        "package": "Ing200086\\Reto\\Vertex\\",
        "pageRank": 0.29,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "Ing200086\\Reto\\Edge",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "Create",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 1,
        "wmc": 3,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Ing200086\\Envase\\Interfaces\\EntityInterface",
            "static"
        ],
        "parents": [],
        "lcom": 2,
        "length": 9,
        "vocabulary": 4,
        "volume": 18,
        "difficulty": 3,
        "effort": 54,
        "level": 0.33,
        "bugs": 0.01,
        "time": 3,
        "intelligentContent": 6,
        "number_operators": 3,
        "number_operands": 6,
        "number_operators_unique": 2,
        "number_operands_unique": 2,
        "cloc": 0,
        "loc": 17,
        "lloc": 17,
        "mi": 64.24,
        "mIwoC": 64.24,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.67,
        "relativeSystemComplexity": 2.67,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 8,
        "totalSystemComplexity": 8,
        "package": "Ing200086\\Reto\\",
        "pageRank": 0.2,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "Ing200086\\Reto\\NewEdge",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "Undirected",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "lcom": 1,
        "length": 2,
        "vocabulary": 2,
        "volume": 2,
        "difficulty": 0,
        "effort": 0,
        "level": 2,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 4,
        "number_operators": 0,
        "number_operands": 2,
        "number_operators_unique": 0,
        "number_operands_unique": 2,
        "cloc": 0,
        "loc": 7,
        "lloc": 7,
        "mi": 79.32,
        "mIwoC": 79.32,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2,
        "relativeSystemComplexity": 2,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 2,
        "totalSystemComplexity": 2,
        "package": "Ing200086\\Reto\\",
        "pageRank": 0.14,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    }
]