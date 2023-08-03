<?php $page_title_name = 'Login'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php echo $page_title_name; ?> - Talents Apartments
    </title>

    <!-- Custom CSS -->
    <link href="{{ asset('home-page-assets/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        @media (min-width:676px) {
            .page-title {
                min-height: 350px;
            }
        }

        .authincation.h-100 {
            height: 100vh !important;
        }

        @media (min-width:767px) {
            .row.justify-content-center.row-rooms {
                flex-wrap: nowrap;
                overflow-x: scroll;
                justify-content: flex-start !important;
            }
        }

        @media (min-width: 350px) {
            .col-fet {
                width: 50%;
            }
        }

        .row-fet>* {
            flex: 1 1 20%;
        }

        @font-face {
            font-family: "wticons";
            src: url("data:font/woff2;charset=utf-8;base64,d09GMgABAAAAABvsAAsAAAAAQWQAABuZAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHIkYBlYAjBAK2wjJJQE2AiQDgnALgToABCAFhAoHhmkb/zZVIbBxAJAwnRJRlKxNSPb/lwRtSqgsHtJ2L2jGrCDbKXsRiTT6VKRF0Id2GfkKHqN91UWaMTRaXFt/9RUqyF1PyS/vqG/cUEp4/pmr9wYGlpASniTDWCBWe76uFIBCVtlXIACueZ/i74sCqaZZ4ejR5in8gMM1TT8AhmibB0+Y0IoNIoIVIAISEjZKmcGibFwaxSrMrV2pm4vWZTtxlS7ahS6So7U2tnpiey/iRDxTyZ8yMRKatkbIHgGD80IecRCDOTWpOZScYaA04NCAWVCEjZ/kA+vuJ939HKcEaRsaMBv2l+pvO/17+nCxW/fY2xjjTEAQGpB4QsRNETa1Oa5TOll9KgiDzbfWr97eV0NMLpHFvBTS7Nx9/s7O7RffHczuL7boHSaWROwEc288kiWT1z3TIdEsUgqlWK3QiMBD3KuaMe0HPM8eYkjGnJZYWuqFYg3W6iXqlRZNIK0YV7faTd+Bm7kipJ+x2e+B07u2GpkyLETM5f3cERQw7JJDHaSLTcbz17/6hGU6s18FSd1K/v67r5M0/OglzorkWRwfw6R9ob/5KVbKJq5UIe3VHrpI79iVT7xfLFDFzVMlmEwWm8Ol0Xg8CZPOhbre840XsXEGX38RUwKhSFogw2fIShqWFzAVFJUYcnLGDLFUVEkyLMGkW+azOOKWaAjZZaUSYk2UGKFz6ip0d+IcA1t0SIibpliCACzfUlIScHgMrqhZHLLwt5KftbosvqiDm1fFrZswwlLjqAsTfVxChEseDpVwp9a9uBXc+VGx2Z2mLZL9jO7qsnhb1uo7EAo06CcWuLm6sgf9yAxr3xdG+ZqRhzongZr00V2Bs4UHGiKOwKW4SknAVYypWdPinlQYHYmTYvxP0z5N0jHLlUkxsOtRpqmeJ4aSipy05FqyMex2IWaFbma+hMXnUHVDLZMsh2YqsELnaLBKxEVLkits+VVtlizLIl2ksVIbTNp0bNWILM2VGa+vH8iON6L1KwvEjbtU9JavPGcmFUwMWY9U5NdTU2oi+8ZEarAkYivJyEMZI+ccGqGTDnuFU3vN0MiOGNTqCuzSVFGrQndP71h06IYVCkBmTTRbZ07Ak1mfXEv14Wpm4IBOmowZw/Nzx/n7C88pBuKEFbpH48Tj7m4SGOwEaBCHIjln7nvsiWsd2rGsnIqahj4l/H8ZJBiL1d8APwY3XvlAMwhBFYswN6N6iN7iL7qlP/8B/ejtdWvBADGggdNrmr/aoZZTaqBF4inN8Mf+0QMVmDVJo0srKmvoeN9nfij9///xdaqe8Os+9EUJa64pKmatW9Tm/rlkyIOWgbqMno62rpSiPkOTyVtTKKsrRApySkRLhT+Tpm1lNU+q0hTB3mGOSUgaMmLUuAmTpsyYNWfegiXLVqxas2HTlm279uw7cOTYqTPnLly6cu3GrTv3HjxBSTFNtDb1TK8DMEQJpBbwWgzpGGu+J21k8/DPPy05VgX4A9cuq56qCqDOUYD2gKo14DtTtECKAQiog5AMiOiBNB1QpA3K7S5vAUiBRrvIXgD64HUM8AZN8CYmeAsPvE0A3qEB3iUL3iMP3icCH1IAH5EDH1MCn+CAT7HAZ1TAF/jgS0LwFS74Ght8Qxl8Sw18xxP4nir4IZuGYIOgRQAaBHQIxCAiAdEiCTFiCGLFCMSJUYgX45BITEBiMQlJxBQkFTOQTMxCcjEHKcQ8pBQLkEosQYJYhtRiBdIQq5CmWIO0xAakLTYhHbEF6YptSE/sQvpiDzIQ+5ChOICMxBFkLI4hE3EKmYozyEycQ+biArIQl5CluIKsxDVkLW4gG3EL2Yo7yE7cQ/biAXIorp0lvOR98BN+M34E4eUzmCMsguKT6ZERseJYIgvRXBBqKjQnBpYpxdRmyAhbYCixNSlb4Cw4bUW75gbv21zUvcQ+i2uRoWjn1DVauVxQP9bUWd3v8Rdp6p3nUT1Y+VlRGWOt/3bzg5PSFY0kbrbbxnpVOX/GXjdfxH7Njjq1ljwPIR2GINVxwTHrXfsAvaZw4fsCG98u8cL3A3xCR1Hlq273YZ+43igSPap33vzQ9iEeILokNgODOoHiXiCY+3+tNrfm/orbr5fdXHU3ctmFgr846Cn6abMDDLtJ3PiiPj0znn6Un69z3iEAAQwwxE0EGwz6bD89/WXrH+DnB1xJPm6yf/0b/PXnX/BvvYkJ2JZDMh0wOwDo5kOgGtfe4YnK86BwCUGcBeesbkGnJ0gLwokFm/mknR2i7UcmtM4bTkYoifIXdT/QipBPPGnUZA0fPMJ+9QT6xOMKzefXyaewz09P5N7i92nzc0dIa7fJYU6PsnPxA948Khcj1eDfeeeqcUQuRmmny7kWnx8aDvNx8rv4gf2sa51fefMq2NpipiedmLW1p65XHg0ORMh49c34ijQ6Eo80++FZDkLjpAjSufRliE/kJdr8LFCNDFN5kZMZI4uZkbmdE3mVJfkZnaRcZy+4B2XD4GgUK+8gzap4SlwUsrOqgDWAlUxHlVMSCO4PhjkNhg+G5zKOIYOIcAQYAot0xPqeuwhJ+2k5QfLjUwAmgxggqAHj2aeJ9vnyQkT++eczOoW1W9q5/JXS7r4Q9lMkHekoDlihrlDusxsxe4qNkuz2W8uxmnenKTnnHu0qvX5/Llo52/TcbEYCmXJvbaosBYUVshBMt+AiJHOwqlYBaM01/ymgwUoMjAxCvg4Mm4GOcpt2lnSX9XvTuqrRskIh02xG6Z5ym3Q8ZnFHoBAJzsxOc23mhkJWaLQ0FMismm0GzPToaC5noKu0q6x7Fi+D4kxvGShkYn2ZBDTNkBXu7r/STDhsU0FpMthZAlqk/2WCncEkLBurtWPxcKhvap83rX9hdzhlcSNstOEDnkUo32MnAlkgeNJnLO6ZLLvBPQb7Sj8zFy0D9h+N/X/q4drQaRDiAq5AVbYzrqw+OlwsveEpZ/E1Y9FVW7pLnkO/+C6/Gt+cH+1kFMlEAYB8GNxYm1fN+CcEM6tuIhb2Oo9BrJbfixJx/b18e3XzS9SHG80A7WW4o3gM/KNbBvasulsV8fSGGNEsVvE8PAsQFLEckpFMvWvTHc/PG8PKOa31fsLqQ5wW7Opqt1fS+dfAM+v7XHER5foGtA6B8fDYRjekUewv0qqLsA87Lb4CdrDlqufH8XVxBqi6nbW08pOznJvdXlkKaTnoK52Wmmwa6tI8Lc0cpXl3x7taWozIva8TCWXa4/IrMK7Nz67PHg6Gf8SfxK/cgOI7km8jiQW590R4HlbvovkPWDkOMBKFdVTIHDp05Hvs8YKuLjPOEnQTK2DhGUE+ox3232XD/tf2whpZhLbHmsb/NK7+QixTJglpMgdBdqvOkiWWBM19ZhJvX2woyI+mLEKYZQYIIX0oHaA359DRjUIgLedaLZZ5oh417BofoBsC9rMrEfdzgzzUt6V8Ue3ZcmAVRE2klaRboeH/SBUCmAE/hBrwMzUPAwTxyDs6N841G7YtXReOI9OgvriHbzQIHZHbIrwTIv2JZXnAsJfZZJLLbrtQvPhCCIXIpVvV0N603OVP317nqF4IzufhxN3IoAkyV8+7H+Dx6l6QZu1IS8aOteWGdDVbBdut7r0KCXTbkkGq5ihaUoVnHXyenoXt+eEYs0bROHkzQDpKOkuCrVlVX8RZ8aKajSzGKg8hqr/flny2HxTQVxvVvVijY4DOANOuhUJCD7HT/DCpgagSqhs3+DCHd91y6DkR4HtXfWW8SvjmbJ/rj6+r34+HV8Gzsx3U0jp6bV25KgSuebzg+YdyIzW6qXCOMCsdqFCmy1i4mm1XcPNWeIeqZyLwdANfcnjH2khrCz0pV91dl0l41Nta+SD+ZOEV+HGXQ06Obn9CqPciQlFK5GMPLR3bQhqJPVyVmd0dv7IxVoXXpT0M3tntJDWanSPhJxt/AHFjIF13fPEO6EYxTSYDxEQyxDKziWEiJK0Qux3LI6vnO9AlyphlhXkKqyDNz+OpFMYqCVq3ooCSw9zbnUSEpvIFZE1u7gqGyLJ0ZBVL0PIOo2QKmc9XZ+csp5ivHIuvpQvZtG7WG4nhOMrz2l8HYjxST8Rj+VBvMWebMjSae3I00yzHr9kFjeeHhx6/fhloaU3OSWI1LzVv7Lf0uWy8+gHF5fd6AwWNzZDfBQ0jwnglYZDycwg+nYUgaQO8/6UAJDNAnWXKP2CfyN0v5+kaiEEVwPDxxzzWnrTmEC5rkfbRpdC3DIRCsrb1X370v5mow+ocVYDSz08ZoDou4FEr/VQBx4k1r0ZNGRb/1O+e8FM8PKXLRRcQzxAnjosZ7bEW44kMcXyAi67sIe1HTWQNWor2PusfoNZqtX2LFilQd3h9H+22Z2oGb4hGAL5c0EHw0dQ70HB/OgzKzKQCcOkaQsKkdaxqs764LfQ4fdz1jJAaGj0rKmpWdFr+wovO/f3zHjy4kHiV89wKqq7eEYo0IJMeRGtCuLekTr1jx5E3b8bGOkBl+qJFnwYGVqz8D7yqRguL2M9oQ0O8dPxKdjY/u53X7oC/Vi6h4CkhS9GYjr6b7Ick7RLALGNnU/AO7byO7BReaRGnmiQdOh9vNj958vSJAayfGkDF3/z0Kdhbe9ym59cgg7GWyRH4fQroFZNiYtZmxg0ulrw/3bxnr9lksvLu1HR4h1qf9+z57ONkPhqKA8aHpVjG5vQB3aNmHyewcSN4xBK+Q13jM/6xGzdhAb+h0xlqoIvRRbZw4TufKW0DokMX5PIWjAzz7iDzDclZQephWoq9xDJ/Ym9uP7Ncz5CEGEiZvSRAVwyaWwyETwv7B47YRzoooiv4ReEFeeF6wacifj6Xm88rqqrILQ3Pz+Pp+YZ4o//c/n53T8Ijb07erTSfOO/oaO84n70C9vaO3u3f+7pH5hfNYahmJOsakpNjZyRVFulm6+xUk+o9UGiCFI2a44NsSWmdJaPRi4E8+NJpm3kTBmV05kXm7T04Ya3LaY8zAo/C3YX3Uj5nv37nITjjsRWj3ujqqCvBlOJO4UoxtiW+oOturhEB+9XdInsh8D1tniXFNyki2qJBR/97uP2ZZP7E3FlUU1lSxBTLmWoL3coPCwJhuKOFRRY4QnCL85IZjSrs1N+5GVboHNllPAhc3PaRNUC+SuZdw5Lve1g1u7+F0mrWHmD54Tv6zAZYrf3uILYvqH5fjo2ykSsKDnTfIMbSCDB/Ct8jBFeQuwSOpsdZaUnRl0/FbV+1NGrx0EecY0LRtvrTZ861+H7tA/+DuftLNxXubtNMTfNNcoCQLkmW8U5oIo8hQ6lUBYce9QyiWgExl6a2KxySDT77U37+5cni0jJt+7QySyukRXKCLQlLENinVdShHIIHu3tjv82aANMadxAOPu5svfel1n1VkVbHnpTAcwqhEO3YR9pocapFk9f0bo1U78ldVrLv7rzpO5fMWf6ekECbb7UORsg+JCMpyHHGMmlxZGSxtAwn4GrFkWVSHLGFxiyqzk2zUgHAI9WrtmW7PpmoIeo7t9cmwpPghaHwxC9ybGhi2EyFZ2P1Y08ncmdeazcgSVLQk/RPeaNp4IlZ6RRfpwb0XktdYeiuzIB7v9Y0PTAsM7CVNSLPsJyw3Tcbbu7O4YQxhcVKaD11xDfczxQx7M/zG77/NSs93hCvzFKuNqzur+qukh9oCWGokyeB3LeG5wELJtA8W96GVlNT1vP1S1n1i/3E0G2IXlAQdNhoz3L0UKtFDR3e1H6OTH6nyI8r0XN5RfVjQ3rOrEL2oEmEMwR4TE3sOmsEzDM++tN6o5Kq/KmgXqNynQe6yRQfzwWN3LCGRlFjXKOwEbhJ7ys9XZl1tQoYz7+oaYPPY/S8WTlVpwjmagDvd82cd78ME2kjDVWfbb9OUATggT8qnk7HFSQZ4WR8jFUSUXb4ZHxLfbVs6o1HWMt4eWvp3n1nG31GdsI+0ihdDI2jUTIlWiCmwBDO2VbJEOCRpUmqA4eu9vQhKmDwvOWkWDAY2ffsXfnBm7K8JTdPy7ewgtCaWGsSBibwjCk8W0DBHzd28sZtE2Cqpg785sfzm+6O1LiXF2pl5wgKeI7B9gRy6LZVbtGihZMXrt4SnL8xaVne3ovTM9csnlNzkRDjVm/ZCsdlNUqIkcTo2uniKULhFPF0uIArTxFOF0PAk4n6a0Gqm8pVWR35m/8PNKmP8GdPwKi/S8+eJYcfvrp8+dXD7ev2dLr4j/o7oqA9pyDU0NSQQI02MIR6a2X9LVqIJjBQE+LHR1FOf/jw0zTyc0ztZaH4qI6Ax/4unfxVJOxfUg6trI9fSABf/8G4cTO3YHvrX/8xM8s8Z46Nzeirc52lF2yttaVjhm1DbAGmow9j6JgmjbVtCAaQe90aQ7f96CpBJMKQkGWcHgfBGwxwJNxWuhEHtSzWo2gF8Fw41qAT0MhQKsojNROONCkzYa8BR2IZyf23MkT5253kbpaavVxchSa3MDdThGv7iOwA3kgIIxjxe4Iza5V8Z6SbSej61n6NVfA68m4U5URdbrCXuMmKu4i0DOHWvXh2SDijNhPtMhGORmDmxovwSGoiippJQCEI0zUqmqc6uSus6+7ULmwX0N8AbLPOUUkP6AqgK3ugNXqdX8DjFVQBmK2IBAEQGGuWOIeUWrI4ialhZc/I4mSwQzM42Q8TJPjA3vIZ2RpWErNkMSn1radeqfcEGrqcYYqj+wsU9+z7uWXUBHmk7wkU/vQ4U+xIHN0hAv9ZxwhiZ/gI49bTEh3p/JHYET7dSUlbL4zL8GEH6Rif8REO9LgRifvDjFcZ+CbC8j7LAE5at393JJlHkpxo2BkOifVrNhujQPvmtfpEDuDMRjMNUA1EWFYUQ7MLnIT2mQwVQw7V07MInr9DU5DOOjgKsp0QHYJHUOOQrnG3h7d+fLoyEk+S31vJggXCLWQwAMGJEhgEO8oHEDizABw87h5lt+1+3388C4/t63r2zcr+FP30EZ0wsV50+YZ2RrnEOJdgJNSgtfK5PfmHSs6SMplSllwV7Seb/TevCN2GGvP+zvaTRauwNKZUypSzQPAKfbmy/FGCazM4aORdrlqlV6lQjipfe7vYs9MTl4xT5trEz/TXuksk7lp/kXCyUo7T4zoP3nLlqlHk766VSLS5xEG1s0TDdqvqaRY291S5sfGJO6trb90SL5n4ICa/Jj/m8wNaEI+blx9eLuC9zQuiPQBb35gnNb+YOAum782OQmXxA3z6ozAYOtTq1WldNtiRvNmKvQ5hg3Q4btwA+pCLrcMXeSwjU7etOsa9ML/nollViBoEYdmEJRFhCtp3yr6pKc6iMYMWwHCan0wchel9u10rtHiEz3joiUOHWrw5VZgDxsZufb70vNvgeQCyZzCWb8L3w6TBCiZFHLXoHq4X70PxbPjJjAqWBhtx+MrccE0gPzkkhqIxGFKcooN1/EBVWHYFnIBff8fe7GddNnavd6ugSJbMixJJ0Gpv5NnZyPTuUoq3ghUJJQLivo4IPZ+vj5DHF98jZ2LKLTXO6QmrNIdfHkuLFRQ6Zbnq50QI9EX81Cryt5SVLMJ1+7edLs5ZLnuAr9fzQeDQOI6kjJD6cmJrYqyhwEzGjw+YfPR2dCu6HfXqt72dyaAirGNiazi+UviSqGwZ+LFtUO2Z2I5e01isrUtsTPiOZHeHpJnVNpmhtpkzJhU7bK01MeGxBBwxxl2tSaGHq04roehfG8ONxV9b5yVjMmVqgfBSR2JZi9uA0DINIobMvw089tjku5c0+itPOPNxh9bO6pHE29GcdSqNAn/NWZajt3ng6MDAKGmvHdZuc/qvOltrMll7dXs7/eMB6rBi9dMW1TPkEtSSZ7EsKM53rXmhpbVgYPlAUX/RIgFvAVie6Jjpwd/nwY0Tc9jUU9JHtMyPdqN2aHIzgsebjMYSgJu0pSSXm83hZHNzRwQMPrDbP/J6nZ3FGq1Gs/639vczeMYObneEUBnParWBr9ug8C524YZtmqnRESoKHGWbaxmPgTT2nOaAbLO5IS/fSlXjkHXbdFtrhBMZE+FJx2qeva656N4+qw1pKNTK5YnMWrT6YHB+tqmeBs0POMk1F3WPet5As24NwGA2v5nh8A6Gy1MhdZCM2QyyG3qrpJEqyAZcreAnCsDd8FkAPYTYEIlGIYwfvB7Umi6GsV+g5ygCqyFqOToHjwbXf9BIObkH3cr2GwM1Ig4pqntTZYkMHYSKfAR6hpVAlsO/A/dWBrdOeFc/ztA5iCCN0MIFqH6o2/wPgHSzDiOroK0QkanQxhzXQm/caeXoIPQACRbQJREi4jh0kKFRickeqAO55kNTI9qp0F2/HmjOytEFKDDLtFApg/rtHHiIzlDS/b/sNw08ia/MycEKvllYQ28AwHTL58drAii+XZAKFsD18oAAiDnLoc787/8/SP+nSH7uShwd38o4+35mM6gLXn9KBZh4QFvd4O8WQbGsj3hCW1+hq1CXKJsgh81m3ExTaioYlREA1EMA5Kj5H38zTXhAyCgA4q5kFdjLT3/bJ34gv2aDZary94PZIAIAZ9hKgAENAQDeKgXgH0rk4PwclUCAZubgf8pUCcUWGEosyLEVsAbOsTVAA2ZsD3yA/8ojQARpAAIwhCWAAQyYeqDgFrMoyMJIISxaYyOBHdgcGwUwoD+2FUgGFzfGGngWKP8G8Zow34ArQbHh7i/sATh7wqbvNoiTcQgIrARMM543eeY2RWxjmWJzQCgQAjWJ6Qm0dBORtLW+bmlPXacpLgziNWG+AVeCYnpzMtIH4IyhPmkNPR0b5dQhRpb4lYDhx3NPN8/cJmLxtnEaZIoNB3yQEQWM6AMnuuYJNCYdEw5N2mLdap9lxV3HXNy/eGW00Fx+x1lFRkGFGg1adP959WONMcEUM8wBRJhQxoVU2ljngzCKkzTLi7Kqm7brh3Gal3Xbj/O6n/f7/VQQRulMNpcvFEvlSrVWbzRb7U631x+89LJxVh1bU0FZC3as7ZfVY97pYHMD2b/AHitX6chFhZHWYNuv6gN6+kqT3EYVQh1XnTHhGq6v7Vd0p/maqzzp9Tqqse1rUzmq9vza9IC7lVewCsPEFfxJoRn5a9P2I5tgxkpP39sKAcweoO1KBoYVW2gq29xYTSuurFQujTfejZqfkaPKv0gMK/5aeh3SShe+K+EExHT/1j70DD4i3YCmGAGNEk+YPyQ1XKDlpskNDOwFVlNkgdqjx2ahqbBOA9GX+Daocw9E+fA6M+JBCeGtPmzbf+b6J+vMu4l8J9GuwjvmJw2gQ81nAxd0W5yDLDRfcaqkONT84feG+VSD1ltx6ynIhwwoWmsN+88qpgB5lFPEo8t1PsTFhkfyCbFXoSo3sN8dK0MwvntsNlIQdooI4Yf0OdT2i88UjRRIGOwGyLwXe5xgYupWNJPMDXZZY9vOHLiw79HOWgAAAAA=") format("woff2");
        }

        .wticons {
            line-height: 1;
        }

        .wticons:before {
            font-family: wticons !important;
            font-style: normal;
            font-weight: normal !important;
            vertical-align: top;
        }

        .wticon-account:before {
            content: "\f101";
        }

        .wticon-add:before {
            content: "\f102";
        }

        .wticon-cardResizeDrag:before {
            content: "\f103";
        }

        .wticon-casual:before {
            content: "\f104";
        }

        .wticon-check:before {
            content: "\f105";
        }

        .wticon-checkSmall:before {
            content: "\f106";
        }

        .wticon-chevron:before {
            content: "\f107";
        }

        .wticon-copy:before {
            content: "\f108";
        }

        .wticon-copySmall:before {
            content: "\f109";
        }

        .wticon-dismiss:before {
            content: "\f10a";
        }

        .wticon-downChevron:before {
            content: "\f10b";
        }

        .wticon-error:before {
            content: "\f10c";
        }

        .wticon-expand:before {
            content: "\f10d";
        }

        .wticon-feedback:before {
            content: "\f10e";
        }

        .wticon-filledDownArrow:before {
            content: "\f10f";
        }

        .wticon-find:before {
            content: "\f110";
        }

        .wticon-formal:before {
            content: "\f111";
        }

        .wticon-gift:before {
            content: "\f112";
        }

        .wticon-grayLogo:before {
            content: "\f113";
        }

        .wticon-ignore:before {
            content: "\f114";
        }

        .wticon-info:before {
            content: "\f115";
        }

        .wticon-leftChevron:before {
            content: "\f116";
        }

        .wticon-logo:before {
            content: "\f117";
        }

        .wticon-love:before {
            content: "\f118";
        }

        .wticon-noRecommendations:before {
            content: "\f119";
        }

        .wticon-paragraphRewrite:before {
            content: "\f11a";
        }

        .wticon-paste:before {
            content: "\f11b";
        }

        .wticon-pin:before {
            content: "\f11c";
        }

        .wticon-premium:before {
            content: "\f11d";
        }

        .wticon-premiumDetail:before {
            content: "\f11e";
        }

        .wticon-premiumFull:before {
            content: "\f11f";
        }

        .wticon-recommendationLight:before {
            content: "\f120";
        }

        .wticon-recommendationLightCard:before {
            content: "\f121";
        }

        .wticon-recommendationLightNoSuggestions:before {
            content: "\f122";
        }

        .wticon-refine:before {
            content: "\f123";
        }

        .wticon-rewrite:before {
            content: "\f124";
        }

        .wticon-rightChevron:before {
            content: "\f125";
        }

        .wticon-rocket:before {
            content: "\f126";
        }

        .wticon-sentenceExamples:before {
            content: "\f127";
        }

        .wticon-settings:before {
            content: "\f128";
        }

        .wticon-shorten:before {
            content: "\f129";
        }

        .wticon-tutorial:before {
            content: "\f12a";
        }

        .wticon-unlock:before {
            content: "\f12b";
        }

        .wticon-warn:before {
            content: "\f12c";
        }

        .wticon-WordtuneButton:before {
            content: "\f12d";
        }

        .wticon-x:before {
            content: "\f12e";
        }
        /* .btn:not(.btn-icon-only) {

color: white;
}
        .btn:hover:not(.btn-icon-only) {

            color: black;
        } */


        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9zcmMvc2hhcmVkL0ljb25zLmZvbnQuanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7Q0FDQyxzQkFBc0I7Q0FDdEIsNjNTQUE2M1M7QUFDOTNTOztBQUVBO0NBQ0MsY0FBYztBQUNmOztBQUVBO0NBQ0MsK0JBQStCO0NBQy9CLGtCQUFrQjtDQUNsQiw4QkFBOEI7Q0FDOUIsbUJBQW1CO0FBQ3BCOztBQUVBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCO0FBQ0E7Q0FDQyxnQkFBZ0I7QUFDakI7QUFDQTtDQUNDLGdCQUFnQjtBQUNqQjtBQUNBO0NBQ0MsZ0JBQWdCO0FBQ2pCIiwic291cmNlc0NvbnRlbnQiOlsiQGZvbnQtZmFjZSB7XG5cdGZvbnQtZmFtaWx5OiBcInd0aWNvbnNcIjtcblx0c3JjOiB1cmwoXCJkYXRhOmZvbnQvd29mZjI7Y2hhcnNldD11dGYtODtiYXNlNjQsZDA5R01nQUJBQUFBQUJ2c0FBc0FBQUFBUVdRQUFCdVpBQUVBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUhJa1lCbFlBakJBSzJ3akpKUUUyQWlRRGduQUxnVG9BQkNBRmhBb0hobWtiL3paVkliQnhBSkF3blJKUmxLeE5TUGIvbHdSdFNxZ3NIdEoyTDJqR3JDRGJLWHNSaVRUNlZLUkYwSWQyR2ZrS0hxTjkxVVdhTVRSYVhGdC85UlVxeUYxUHlTL3ZxRy9jVUVwNC9wbXI5d1lHbHBBU25pVERXQ0JXZTc2dUZJQkNWdGxYSUFDdWVaL2k3NHNDcWFaWjRlalI1aW44Z01NMVRUOEFobWliQjArWTBJb05Jb0lWSUFJU0VqWkttY0dpYkZ3YXhTck1yVjJwbTR2V1pUdHhsUzdhaFM2U283VTJ0bnBpZXkvaVJEeFR5Wjh5TVJLYXRrYklIZ0dEODBJZWNSQ0RPVFdwT1pTY1lhQTA0TkNBV1ZDRWpaL2tBK3Z1SjkzOUhLY0VhUnNhTUJ2MmwrcHZPLzE3K25DeFcvZlkyeGpqVEVBUUdwQjRRc1JORVRhMU9hNVRPbGw5S2dpRHpiZldyOTdlVjBOTUxwSEZ2QlRTN054OS9zN083UmZmSGN6dUw3Ym9IU2FXUk93RWMyODhraVdUMXozVElkRXNVZ3FsV0szUWlNQkQzS3VhTWUwSFBNOGVZa2pHbkpaWVd1cUZZZzNXNmlYcWxSWk5JSzBZVjdmYVRkK0JtN2tpcEoreDJlK0IwN3UyR3BreUxFVE01ZjNjRVJRdzdKSkRIYVNMVGNiejE3LzZoR1U2czE4RlNkMUsvdjY3cjVNMC9PZ2x6b3JrV1J3Znc2UjlvYi81S1ZiS0pxNVVJZTNWSHJwSTc5aVZUN3hmTEZERnpWTWxtRXdXbThPbDBYZzhDWlBPaGJyZTg0MFhzWEVHWDM4UlV3S2hTRm9ndzJmSVNocVdGekFWRkpVWWNuTEdETEZVVkVreUxNR2tXK2F6T09LV2FBalpaYVVTWWsyVUdLRno2aXAwZCtJY0ExdDBTSWlicGxpQ0FDemZVbElTY0hnTXJxaFpITEx3dDVLZnRib3N2cWlEbTFmRnJac3d3bExqcUFzVGZWeENoRXNlRHBWd3A5YTl1QlhjK1ZHeDJaMm1MWkw5ak83cXNuaGIxdW83RUFvMDZDY1d1TG02c2dmOXlBeHIzeGRHK1pxUmh6b25nWnIwMFYyQnM0VUhHaUtPd0tXNFNrbkFWWXlwV2RQaW5sUVlIWW1UWXZ4UDB6NU4wakhMbFVreHNPdFJwcW1lSjRhU2lweTA1RnF5TWV4MklXYUZibWEraE1YblVIVkRMWk1zaDJZcXNFTG5hTEJLeEVWTGtpdHMrVlZ0bGl6TElsMmtzVkliVE5wMGJOV0lMTTJWR2Erdkg4aU9ONkwxS3d2RWpidFU5SmF2UEdjbUZVd01XWTlVNU5kVFUyb2krOFpFYXJBa1lpdkp5RU1aSStjY0dxR1REbnVGVTN2TjBNaU9HTlRxQ3V6U1ZGR3JRbmRQNzFoMDZJWVZDa0JtVFRSYlowN0FrMW1mWEV2MTRXcG00SUJPbW93WncvTnp4L243Qzg4cEJ1S0VGYnBINDhUajdtNFNHT3dFYUJDSElqbG43bnZzaVdzZDJyR3NuSXFhaGo0bC9IOFpKQmlMMWQ4QVB3WTNYdmxBTXdoQkZZc3dONk42aU43aUw3cWxQLzhCL2VqdGRXdkJBREdnZ2ROcm1yL2FvWlpUYXFCRjRpbk44TWYrMFFNVm1EVkpvMHNyS212b2VOOW5maWo5Ly8veGRhcWU4T3MrOUVVSmE2NHBLbWF0VzlUbS9ybGt5SU9XZ2JxTW5vNjJycFNpUGtPVHlWdFRLS3NyUkFweVNrUkxoVCtUcG0xbE5VK3EwaFRCM21HT1NVZ2FNbUxVdUFtVHBzeVlOV2ZlZ2lYTFZxeGFzMkhUbG0yNzl1dzdjT1RZcVRQbkxseTZjdTNHclR2M0hqeEJTVEZOdERiMVRLOERNRVFKcEJid1dnenBHR3UrSjIxazgvRFBQeTA1VmdYNEE5Y3VxNTZxQ3FET1VZRDJnS28xNER0VHRFQ0tBUWlvZzVBTWlPaUJOQjFRcEEzSzdTNXZBVWlCUnJ2SVhnRDY0SFVNOEFaTjhDWW1lQXNQdkUwQTNxRUIzaVVMM2lNUDNpY0NIMUlBSDVFREgxTUNuK0NBVDdIQVoxVEFGL2pnUzBMd0ZTNzRHaHQ4UXhsOFN3MTh4eFA0bmlyNEladUdZSU9nUlFBYUJIUUl4Q0FpQWRFaUNURmlDR0xGQ01TSlVZZ1g0NUJJVEVCaU1RbEp4QlFrRlRPUVRNeENjakVIS2NROHBCUUxrRW9zUVlKWWh0UmlCZElRcTVDbVdJTzB4QWFrTFRZaEhiRUY2WXB0U0Uvc1F2cGlEeklRKzVDaE9JQ014QkZrTEk0aEUzRUttWW96eUV5Y1ErYmlBcklRbDVDbHVJS3N4RFZrTFc0Z0czRUwyWW83eUU3Y1EvYmlBWElvcnAwbHZPUjk4Qk4rTTM0RTRlVXptQ01zZ3VLVDZaRVJzZUpZSWd2UlhCQnFLalFuQnBZcHhkUm15QWhiWUNpeE5TbGI0Q3c0YlVXNzVnYnYyMXpVdmNRK2kydVJvV2puMURWYXVWeFFQOWJVV2QzdjhSZHA2cDNuVVQxWStWbFJHV090LzNiemc1UFNGWTBrYnJiYnhucFZPWC9HWGpkZnhIN05qanExbGp3UElSMkdJTlZ4d1RIclhmc0F2YVp3NGZzQ0c5OHU4Y0wzQTN4Q1IxSGxxMjczWVorNDNpZ1NQYXAzM3Z6UTlpRWVJTG9rTmdPRE9vSGlYaUNZKzMrdE5yZm0vb3JicjVmZFhIVTNjdG1GZ3I4NDZDbjZhYk1EREx0SjNQaWlQajB6bm42VW42OXozaUVBQVF3d3hFMEVHd3o2YkQ4OS9XWHJIK0RuQjF4SlBtNnlmLzBiL1BYblgvQnZ2WWtKMkpaRE1oMHdPd0RvNWtPZ0d0ZmU0WW5LODZCd0NVR2NCZWVzYmtHbkowZ0x3b2tGbS9ta25SMmk3VWNtdE00YlRrWW9pZklYZFQvUWlwQlBQR25VWkEwZlBNSis5UVQ2eE9NS3plZlh5YWV3ejA5UDVON2k5Mm56YzBkSWE3ZkpZVTZQc25QeEE5NDhLaGNqMWVEZmVlZXFjVVF1Um1tbnk3a1dueDhhRHZOeDhydjRnZjJzYTUxZmVmTXEyTnBpcGllZG1MVzFwNjVYSGcwT1JNaDQ5YzM0aWpRNkVvODArK0ZaRGtManBBalN1ZlJsaUUva0pkcjhMRkNOREZONWtaTVpJNHVaa2JtZEUzbVZKZmtabmFSY1p5KzRCMlhENEdnVUsrOGd6YXA0U2x3VXNyT3FnRFdBbFV4SGxWTVNDTzRQaGprTmhnK0c1ektPSVlPSWNBUVlBb3QweFBxZXV3aEorMms1UWZMalV3QW1neGdncUFIajJhZUo5dm55UWtUKytlY3pPb1cxVzlxNS9KWFM3cjRROWxNa0hla29EbGlocmxEdXN4c3hlNHFOa3V6Mlc4dXhtbmVuS1Rubkh1MHF2WDUvTGxvNTIvVGNiRVlDbVhKdmJhb3NCWVVWc2hCTXQrQWlKSE93cWxZQmFNMDEveW1nd1VvTWpBeEN2ZzRNbTRHT2NwdDJsblNYOVh2VHVxclJza0loMDJ4RzZaNXltM1E4Wm5GSG9CQUp6c3hPYzIzbWhrSldhTFEwRk1pc21tMEd6UFRvYUM1bm9LdTBxNng3RmkrRDRreHZHU2hrWW4yWkJEVE5rQlh1N3IvU1REaHNVMEZwTXRoWkFscWsvMldDbmNFa0xCdXJ0V1B4Y0todmFwODNyWDloZHpobGNTTnN0T0VEbmtVbzMyTW5BbGtnZU5KbkxPNlpMTHZCUFFiN1NqOHpGeTBEOWgrTi9YL3E0ZHJRYVJEaUFxNUFWYll6cnF3K09sd3N2ZUVwWi9FMVk5RlZXN3BMbmtPLytDNi9HdCtjSCsxa0ZNbEVBWUI4R054WW0xZk4rQ2NFTTZ0dUloYjJPbzlCckpiZml4SngvYjE4ZTNYelM5U0hHODBBN1dXNG8zZ00vS05iQnZhc3Vsc1Y4ZlNHR05Fc1Z2RThQQXNRRkxFY2twRk12V3ZUSGMvUEc4UEtPYTMxZnNMcVE1d1c3T3BxdDFmUytkZkFNK3Y3WEhFUjVmb0d0QTZCOGZEWVJqZWtVZXd2MHFxTHNBODdMYjRDZHJEbHF1Zkg4WFZ4QnFpNm5iVzA4cE96bkp2ZFhsa0thVG5vSzUyV21td2E2dEk4TGMwY3BYbDN4N3RhV296SXZhOFRDV1hhNC9Jck1LN056NjdQSGc2R2Y4U2Z4Sy9jZ09JN2ttOGppUVc1OTBSNEhsYnZvdmtQV0RrT01CS0ZkVlRJSERwMDVIdnM4WUt1TGpQT0VuUVRLMkRoR1VFK294MzIzMlhEL3RmMndocFpoTGJIbXNiL05LNytRaXhUSmdscE1nZEJkcXZPa2lXV0JNMTlaaEp2WDJ3b3lJK21MRUtZWlFZSUlYMG9IYUEzNTlEUmpVSWdMZWRhTFpaNW9oNDE3Qm9mb0JzQzlyTXJFZmR6Z3p6VXQ2VjhVZTNaY21BVlJFMmtsYVJib2VIL1NCVUNtQUUvaEJyd016VVBBd1R4eURzNk44NDFHN1l0WFJlT0k5T2d2cmlIYnpRSUhaSGJJcndUSXYySlpYbkFzSmZaWkpMTGJydFF2UGhDQ0lYSXBWdlYwTjYwM09WUDMxN25xRjRJenVmaHhOM0lvQWt5VjgrN0grRHg2bDZRWnUxSVM4YU90ZVdHZERWYkJkdXQ3cjBLQ1hUYmtrR3E1aWhhVW9WbkhYeWVub1h0K2VFWXMwYlJPSGt6UURwS09rdUNyVmxWWDhSWjhhS2FqU3pHS2c4aHFyL2ZsbnkySHhUUVZ4dlZ2VmlqWTRET0FOT3VoVUpDRDdIVC9EQ3BnYWdTcWhzMytEQ0hkOTF5NkRrUjRIdFhmV1c4U3ZqbWJKL3JqNityMzQrSFY4R3pzeDNVMGpwNmJWMjVLZ1N1ZWJ6ZytZZHlJelc2cVhDT01Dc2RxRkNteTFpNG1tMVhjUE5XZUllcVp5THdkQU5mY25qSDJraHJDejBwVjkxZGwwbDQxTnRhK1NEK1pPRVYrSEdYUTA2T2JuOUNxUGNpUWxGSzVHTVBMUjNiUWhxSlBWeVZtZDBkdjdJeFZvWFhwVDBNM3RudEpEV2FuU1BoSnh0L0FIRmpJRjEzZlBFTzZFWXhUU1lEeEVReXhES3ppV0VpSkswUXV4M0xJNnZuTzlBbHlwaGxoWGtLcXlETnorT3BGTVlxQ1ZxM29vQ1N3OXpiblVTRXB2SUZaRTF1N2dxR3lMSjBaQlZMMFBJT28yUUttYzlYWitjc3A1aXZISXV2cFF2WnRHN1dHNG5oT01yejJsOEhZanhTVDhSaitWQnZNV2ViTWpTYWUzSTAweXpIcjlrRmplZUhoeDYvZmhsb2FVM09TV0kxTHpWdjdMZjB1V3k4K2dIRjVmZDZBd1dOelpEZkJRMGp3bmdsWVpEeWN3ZytuWVVnYVFPOC82VUFKRE5BbldYS1AyQ2Z5TjB2NStrYWlFRVZ3UER4eHp6V25yVG1FQzVya2ZiUnBkQzNESVJDc3JiMVgzNzB2NW1vdytvY1ZZRFN6MDhab0RvdTRGRXIvVlFCeDRrMXIwWk5HUmIvMU8rZThGTThQS1hMUlJjUXp4QW5qb3NaN2JFVzQ0a01jWHlBaTY3c0llMUhUV1FOV29yMlB1c2ZvTlpxdFgyTEZpbFFkM2g5SCsyMloyb0diNGhHQUw1YzBFSHcwZFE3MEhCL09nekt6S1FDY09rYVFzS2tkYXhxczc2NExmUTRmZHoxakpBYUdqMHJLbXBXZEZyK3dvdk8vZjN6SGp5NGtIaVY4OXdLcXE3ZUVZbzBJSk1lUkd0Q3VMZWtUcjFqeDVFM2I4YkdPa0JsK3FKRm53WUdWcXo4RDd5cVJndUwyTTlvUTBPOGRQeEtkalkvdTUzWDdvQy9WaTZoNENraFM5R1lqcjZiN0ljazdSTEFMR05uVS9BTzdieU83QlJlYVJHbm1pUWRPaDl2Tmo5NTh2U0pBYXlmR2tERjMvejBLZGhiZTl5bTU5Y2dnN0dXeVJINGZRcm9GWk5pWXRabXhnMHVscncvM2J4bnI5bGtzdkx1MUhSNGgxcWY5K3o1N09Oa1BocUtBOGFIcFZqRzV2UUIzYU5tSHlld2NTTjR4QksrUTEzak0vNnhHemRoQWIraDB4bHFvSXZSUmJadzRUdWZLVzBEb2tNWDVQSVdqQXp6N2lEekRjbFpRZXBoV29xOXhESi9ZbTl1UDdOY3o1Q0VHRWladlNSQVZ3eWFXd3lFVHd2N0I0N1lSem9vb2l2NFJlRUZlZUY2d2FjaWZqNlhtODhycXFySUxRM1B6K1BwK1laNG8vL2MvbjUzVDhJamIwN2VyVFNmT08vb2FPODRuNzBDOXZhTzN1M2YrN3BINWhmTllhaG1KT3Nha3BOalp5UlZGdWxtNit4VWsrbzlVR2lDRkkyYTQ0TnNTV21kSmFQUmk0RTgrTkpwbTNrVEJtVjA1a1htN1QwNFlhM0xhWTh6QW8vQzNZWDNVajVudjM3bklUampzUldqM3VqcXFDdkJsT0pPNFVveHRpVytvT3R1cmhFQis5WGRJbnNoOEQxdG5pWEZOeWtpMnFKQlIvOTd1UDJaWlA3RTNGbFVVMWxTeEJUTG1Xb0wzY29QQ3dKaHVLT0ZSUlk0UW5DTDg1SVpqU3JzMU4rNUdWYm9ITmxsUEFoYzNQYVJOVUMrU3VaZHc1THZlMWcxdTcrRjBtcldIbUQ1NFR2NnpBWllyZjN1SUxZdnFINWZqbzJ5a1NzS0RuVGZJTWJTQ0RCL0N0OGpCRmVRdXdTT3BzZFphVW5SbDAvRmJWKzFOR3J4MEVlY1kwTFJ0dnJUWjg2MStIN3RBLytEdWZ0TE54WHVidE5NVGZOTmNvQ1FMa21XOFU1b0lvOGhRNmxVQlljZTlReWlXZ0V4bDZhMkt4eVNEVDc3VTM3KzVjbmkwakp0KzdReVN5dWtSWEtDTFFsTEVOaW5WZFNoSElJSHUzdGp2ODJhQU5NYWR4QU9QdTVzdmZlbDFuMVZrVmJIbnBUQWN3cWhFTzNZUjlwb2NhcEZrOWYwYm8xVTc4bGRWckx2N3J6cE81Zk1XZjZla0VDYmI3VU9Sc2crSkNNcHlISEdNbWx4WkdTeHRBd240R3JGa1dWU0hMR0Z4aXlxemsyelVnSEFJOVdydG1XN1BwbW9JZW83dDljbXdwUGdoYUh3eEM5eWJHaGkyRXlGWjJQMVkwOG5jbWRlYXpjZ1NWTFFrL1JQZWFOcDRJbFo2UlJmcHdiMFhrdGRZZWl1eklCN3Y5WTBQVEFzTTdDVk5TTFBzSnl3M1RjYmJ1N080WVF4aGNWS2FEMTF4RGZjenhReDdNL3pHNzcvTlNzOTNoQ3Z6Rkt1TnF6dXIrcXVraDlvQ1dHb2t5ZUIzTGVHNXdFTEp0QThXOTZHVmxOVDF2UDFTMW4xaS8zRTBHMklYbEFRZE5ob3ozTDBVS3RGRFIzZTFINk9USDZueUk4cjBYTjVSZlZqUTNyT3JFTDJvRW1FTXdSNFRFM3NPbXNFekRNKyt0TjZvNUtxL0ttZ1hxTnluUWU2eVJRZnp3V04zTENHUmxGalhLT3dFYmhKN3lzOVhabDF0UW9Zejcrb2FZUFBZL1M4V1RsVnB3am1hZ0R2ZDgyY2Q3OE1FMmtqRFZXZmJiOU9VQVRnZ1Q4cW5rN0hGU1FaNFdSOGpGVVNVWGI0Wkh4TGZiVnM2bzFIV010NGVXdnAzbjFuRzMxR2RzSSswaWhkREkyalVUSWxXaUNtd0JETzJWYkpFT0NScFVtcUE0ZXU5dlFoS21Ed3ZPV2tXREFZMmZmc1hmbkJtN0s4SlRkUHk3ZXdndENhV0dzU0JpYndqQ2s4VzBEQkh6ZDI4c1p0RTJDcXBnNzg1c2Z6bSs2TzFMaVhGMnBsNXdnS2VJN0I5Z1J5NkxaVmJ0R2loWk1YcnQ0U25MOHhhVm5lM292VE05Y3NubE56a1JEalZtL1pDc2RsTlVxSWtjVG8ydW5pS1VMaEZQRjB1SUFyVHhGT0YwUEFrNG42YTBHcW04cFZXUjM1bS84UE5LbVA4R2RQd0tpL1M4K2VKWWNmdnJwOCtkWEQ3ZXYyZExyNGovbzdvcUE5cHlEVTBOU1FRSTAyTUlSNmEyWDlMVnFJSmpCUUUrTEhSMUZPZi9qdzB6VHljMHp0WmFINHFJNkF4LzR1bmZ4VkpPeGZVZzZ0ckk5ZlNBQmYvOEc0Y1RPM1lIdnJYLzh4TThzOFo0Nk56ZWlyYzUybEYyeXR0YVZqaG0xRGJBR21vdzlqNkpnbWpiVnRDQWFRZTkwYVE3Zjk2Q3BCSk1LUWtHV2NIZ2ZCR3d4d0pOeFd1aEVIdFN6V28yZ0Y4Rnc0MXFBVDBNaFFLc29qTlJPT05Da3pZYThCUjJJWnlmMjNNa1Q1MjUza2JwYWF2VnhjaFNhM01EZFRoR3Y3aU93QTNrZ0lJeGp4ZTRJemE1VjhaNlNiU2VqNjFuNk5WZkE2OG00VTVVUmRickNYdU1tS3U0aTBET0hXdlhoMlNEaWpOaFB0TWhHT1JtRG14b3Z3U0dvaWlwcEpRQ0VJMHpVcW1xYzZ1U3VzNis3VUxtd1gwTjhBYkxQT1VVa1A2QXFnSzN1Z05YcWRYOERqRlZRQm1LMklCQUVRR0d1V09JZVVXckk0aWFsaFpjL0k0bVN3UXpNNDJROFRKUGpBM3ZJWjJScFdFck5rTVNuMXJhZGVxZmNFR3JxY1lZcWord3NVOSt6N3VXWFVCSG1rN3drVS92UTRVK3hJSE4waEF2OVp4d2hpWi9nSTQ5YlRFaDNwL0pIWUVUN2RTVWxiTDR6TDhHRUg2UmlmOFJFTzlMZ1JpZnZEakZjWitDYkM4ajdMQUU1YXQzOTNKSmxIa3B4bzJCa09pZlZyTmh1alFQdm10ZnBFRHVETVJqTU5VQTFFV0ZZVVE3TUxuSVQybVF3VlF3N1YwN01JbnI5RFU1RE9PamdLc3AwUUhZSkhVT09Rcm5HM2g3ZCtmTG95RWsrUzMxdkpnZ1hDTFdRd0FNR0pFaGdFTzhvSEVEaXpBQnc4N2g1bHQrMSszMzg4QzQvdDYzcjJ6Y3IrRlAzMEVaMHdzVjUwK1laMlJybkVPSmRnSk5TZ3RmSzVQZm1IU3M2U01wbFNsbHdWN1NlYi9UZXZDTjJHR3ZQK3p2YVRSYXV3TktaVXlwU3pRUEFLZmJteS9GR0Nhek00YU9SZHJscWxWNmxRamlwZmU3dllzOU1UbDR4VDV0ckV6L1RYdWtzazdscC9rWEN5VW83VDR6b1AzbkxscWxIazc2NlZTTFM1eEVHMXMwVERkcXZxYVJZMjkxUzVzZkdKTzZ0cmI5MFNMNW40SUNhL0pqL204d05hRUkrYmx4OWVMdUM5elF1aVBRQmIzNWduTmIrWU9BdW03ODJPUW1YeEEzejZvekFZT3RUcTFXbGROdGlSdk5tS3ZRNWhnM1E0YnR3QStwQ0xyY01YZVN3alU3ZXRPc2E5TUwvbm9sbFZpQm9FWWRtRUpSRmhDdHAzeXI2cEtjNmlNWU1Xd0hDYW4wd2NoZWw5dTEwcnRIaUV6M2pvaVVPSFdydzVWWmdEeHNadWZiNzB2TnZnZVFDeVp6Q1diOEwzdzZUQkNpWkZITFhvSHE0WDcwUHhiUGpKakFxV0JodHgrTXJjY0UwZ1B6a2tocUl4R0ZLY29vTjEvRUJWV0hZRm5JQmZmOGZlN0dkZE5uYXZkNnVnU0piTWl4SkowR3B2NU5uWnlQVHVVb3EzZ2hVSkpRTGl2bzRJUFordmo1REhGOThqWjJMS0xUWE82UW1yTklkZkhrdUxGUlE2WmJucTUwUUk5RVg4MUNyeXQ1U1ZMTUoxKzdlZExzNVpMbnVBcjlmelFlRFFPSTZrakpENmNtSnJZcXlod0V6R2p3K1lmUFIyZEN1NkhmWHF0NzJkeWFBaXJHTmlhemkrVXZpU3FHd1orTEZ0VU8yWjJJNWUwMWlzclV0c1RQaU9aSGVIcEpuVk5wbWh0cGt6SmhVN2JLMDFNZUd4QkJ3eHhsMnRTYUdIcTA0cm9laGZHOE9OeFY5YjV5VmpNbVZxZ2ZCU1IySlppOXVBMERJTklvYk12dzA4OXRqa3U1YzAraXRQT1BOeGg5Yk82cEhFMjlHY2RTcU5Bbi9OV1phanQzbmc2TURBS0dtdkhkWnVjL3F2T2x0ck1sbDdkWHM3L2VNQjZyQmk5ZE1XMVRQa0V0U1NaN0VzS001M3JYbWhwYlZnWVBsQVVYL1JJZ0Z2QVZpZTZKanB3ZC9ud1kwVGM5alVVOUpIdE15UGRxTjJhSEl6Z3NlYmpNWVNnSnUwcFNTWG04M2haSE56UndRTVByRGJQL0o2blozRkdxMUdzLzYzOXZjemVNWU9ibmVFVUJuUGFyV0JyOXVnOEM1MjRZWnRtcW5SRVNvS0hHV2JheG1QZ1RUMm5PYUFiTE81SVMvZlNsWGprSFhiZEZ0cmhCTVpFK0ZKeDJxZXZhNjU2TjQrcXcxcEtOVEs1WW5NV3JUNllIQit0cW1lQnMwUE9NazFGM1dQZXQ1QXMyNE53R0EydjVuaDhBNkd5MU1oZFpDTTJReXlHM3FycEpFcXlBWmNyZUFuQ3NEZDhGa0FQWVRZRUlsR0lZd2Z2QjdVbWk2R3NWK2c1eWdDcXlGcU9Ub0hqd2JYZjlCSU9ia0gzY3IyR3dNMUlnNHBxbnRUWllrTUhZU0tmQVI2aHBWQWxzTy9BL2RXQnJkT2VGYy96dEE1aUNDTjBNSUZxSDZvMi93UGdIU3pEaU9yb0swUWthblF4aHpYUW0vY2FlWG9JUFFBQ1JiUUpSRWk0amgwa0tGUmlja2VxQU81NWtOVEk5cXAwRjIvSG1qT3l0RUZLRERMdEZBcGcvcnRISGlJemxEUy9iL3NOdzA4aWEvTXljRUt2bGxZUTI4QXdIVEw1OGRyQWlpK1haQUtGc0QxOG9BQWlEbkxvYzc4Ny84L1NQK25TSDd1U2h3ZDM4bzQrMzVtTTZnTFhuOUtCWmg0UUZ2ZDRPOFdRYkdzajNoQ1cxK2hxMUNYS0pzZ2g4MW0zRXhUYWlvWWxSRUExRU1BNUtqNUgzOHpUWGhBeUNnQTRxNWtGZGpMVDMvYkozNGd2MmFEWmFyeTk0UFpJQUlBWjloS2dBRU5BUURlS2dYZ0gwcms0UHdjbFVDQVp1YmdmOHBVQ2NVV0dFb3N5TEVWc0FiT3NUVkFBMlpzRDN5QS84b2pRQVJwQUFJd2hDV0FBUXlZZXFEZ0ZyTW95TUpJSVN4YVl5T0JIZGdjR3dVd29EKzJGVWdHRnpmR0duZ1dLUDhHOFpvdzM0QXJRYkhoN2kvc0FUaDd3cWJ2Tm9pVGNRZ0lyQVJNTTU0M2VlWTJSV3hqbVdKelFDZ1FBaldKNlFtMGRCT1J0TFcrYm1sUFhhY3BMZ3ppTldHK0FWZUNZbnB6TXRJSDRJeWhQbWtOUFIwYjVkUWhScGI0bFlEaHgzTlBOOC9jSm1MeHRuRWFaSW9OQjN5UUVRV002QU1udXVZSk5DWWRFdzVOMm1MZGFwOWx4VjNIWE55L2VHVzAwRngreDFsRlJrR0ZHZzFhZFA5NTlXT05NY0VVTTh3QlJKaFF4b1ZVMmxqbmd6Q0trelRMaTdLcW03YnJoM0dhbDNYYmovTzZuL2Y3L1ZRUVJ1bE1OcGN2RkV2bFNyVldielJiN1U2MzF4Kzg5TEp4VmgxYlUwRlpDM2FzN1pmVlk5N3BZSE1EMmIvQUhpdFg2Y2hGaFpIV1lOdXY2Z042K2txVDNFWVZRaDFYblRIaEdxNnY3VmQwcC9tYXF6enA5VHFxc2UxclV6bXE5dnphOUlDN2xWZXdDc1BFRmZ4Sm9SbjVhOVAySTV0Z3hrcFAzOXNLQWN3ZW9PMUtCb1lWVzJncTI5eFlUU3V1ckZRdWpUZmVqWnFma2FQS3YwZ01LLzVhZWgzU1NoZStLK0VFeEhULzFqNzBERDRpM1lDbUdBR05FaytZUHlRMVhLRGxwc2tORE93RlZsTmtnZHFqeDJhaHFiQk9BOUdYK0Rhb2N3OUUrZkE2TStKQkNlR3RQbXpiZitiNkordk11NGw4SjlHdXdqdm1KdzJnUTgxbkF4ZDBXNXlETERSZmNhcWtPTlQ4NGZlRytWU0QxbHR4NnluSWh3d29XbXNOKzg4cXBnQjVsRlBFbzh0MVBzVEZoa2Z5Q2JGWG9TbzNzTjhkSzBNd3ZudHNObElRZG9vSTRZZjBPZFQyaTg4VWpSUklHT3dHeUx3WGU1eGdZdXBXTkpQTURYWlpZOXZPSExpdzc5SE9XZ0FBQUFBPVwiKSBmb3JtYXQoXCJ3b2ZmMlwiKTtcbn1cblxuLnd0aWNvbnMge1xuXHRsaW5lLWhlaWdodDogMTtcbn1cblxuLnd0aWNvbnM6YmVmb3JlIHtcblx0Zm9udC1mYW1pbHk6IHd0aWNvbnMgIWltcG9ydGFudDtcblx0Zm9udC1zdHlsZTogbm9ybWFsO1xuXHRmb250LXdlaWdodDogbm9ybWFsICFpbXBvcnRhbnQ7XG5cdHZlcnRpY2FsLWFsaWduOiB0b3A7XG59XG5cbi53dGljb24tYWNjb3VudDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwMVwiO1xufVxuLnd0aWNvbi1hZGQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDJcIjtcbn1cbi53dGljb24tY2FyZFJlc2l6ZURyYWc6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDNcIjtcbn1cbi53dGljb24tY2FzdWFsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTA0XCI7XG59XG4ud3RpY29uLWNoZWNrOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTA1XCI7XG59XG4ud3RpY29uLWNoZWNrU21hbGw6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMDZcIjtcbn1cbi53dGljb24tY2hldnJvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwN1wiO1xufVxuLnd0aWNvbi1jb3B5OmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTA4XCI7XG59XG4ud3RpY29uLWNvcHlTbWFsbDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwOVwiO1xufVxuLnd0aWNvbi1kaXNtaXNzOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTBhXCI7XG59XG4ud3RpY29uLWRvd25DaGV2cm9uOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTBiXCI7XG59XG4ud3RpY29uLWVycm9yOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTBjXCI7XG59XG4ud3RpY29uLWV4cGFuZDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwZFwiO1xufVxuLnd0aWNvbi1mZWVkYmFjazpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEwZVwiO1xufVxuLnd0aWNvbi1maWxsZWREb3duQXJyb3c6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMGZcIjtcbn1cbi53dGljb24tZmluZDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExMFwiO1xufVxuLnd0aWNvbi1mb3JtYWw6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTFcIjtcbn1cbi53dGljb24tZ2lmdDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExMlwiO1xufVxuLnd0aWNvbi1ncmF5TG9nbzpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExM1wiO1xufVxuLnd0aWNvbi1pZ25vcmU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTRcIjtcbn1cbi53dGljb24taW5mbzpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExNVwiO1xufVxuLnd0aWNvbi1sZWZ0Q2hldnJvbjpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExNlwiO1xufVxuLnd0aWNvbi1sb2dvOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTE3XCI7XG59XG4ud3RpY29uLWxvdmU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMThcIjtcbn1cbi53dGljb24tbm9SZWNvbW1lbmRhdGlvbnM6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMTlcIjtcbn1cbi53dGljb24tcGFyYWdyYXBoUmV3cml0ZTpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExYVwiO1xufVxuLnd0aWNvbi1wYXN0ZTpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExYlwiO1xufVxuLnd0aWNvbi1waW46YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMWNcIjtcbn1cbi53dGljb24tcHJlbWl1bTpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjExZFwiO1xufVxuLnd0aWNvbi1wcmVtaXVtRGV0YWlsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTFlXCI7XG59XG4ud3RpY29uLXByZW1pdW1GdWxsOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTFmXCI7XG59XG4ud3RpY29uLXJlY29tbWVuZGF0aW9uTGlnaHQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMjBcIjtcbn1cbi53dGljb24tcmVjb21tZW5kYXRpb25MaWdodENhcmQ6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMjFcIjtcbn1cbi53dGljb24tcmVjb21tZW5kYXRpb25MaWdodE5vU3VnZ2VzdGlvbnM6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMjJcIjtcbn1cbi53dGljb24tcmVmaW5lOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTIzXCI7XG59XG4ud3RpY29uLXJld3JpdGU6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMjRcIjtcbn1cbi53dGljb24tcmlnaHRDaGV2cm9uOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTI1XCI7XG59XG4ud3RpY29uLXJvY2tldDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyNlwiO1xufVxuLnd0aWNvbi1zZW50ZW5jZUV4YW1wbGVzOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTI3XCI7XG59XG4ud3RpY29uLXNldHRpbmdzOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTI4XCI7XG59XG4ud3RpY29uLXNob3J0ZW46YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMjlcIjtcbn1cbi53dGljb24tdHV0b3JpYWw6YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMmFcIjtcbn1cbi53dGljb24tdW5sb2NrOmJlZm9yZSB7XG5cdGNvbnRlbnQ6IFwiXFxmMTJiXCI7XG59XG4ud3RpY29uLXdhcm46YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMmNcIjtcbn1cbi53dGljb24tV29yZHR1bmVCdXR0b246YmVmb3JlIHtcblx0Y29udGVudDogXCJcXGYxMmRcIjtcbn1cbi53dGljb24teDpiZWZvcmUge1xuXHRjb250ZW50OiBcIlxcZjEyZVwiO1xufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    {{-- <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" /> --}}
    <script src="{{ asset('/assets/js/plugins/sweetalert.min.js') }}"></script>

</head>

<body class="yellow-skin">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">


        <div class="authincation h-100 page-title"
            style="background:#f4f4f4 url({{ asset('home-page-assets/img/girl1.jpeg') }});" data-overlay="5">
            <div class="container h-100">
                <div class="row justify-content-center p-5 h-100 align-items-center">
                    <div class="col-md-6 col-sm-10 pt-3 border bg-light rounded">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <div class="text-center mb-3">
                                            <a href="/" class="nav-brand"><img
                                                    src="{{ asset('home-page-assets/img/ta-logo.png') }}" class="logo"
                                                    alt=""></a>
                                        </div>

                                        <div class="resp_log_caption">
                                            <div class="edlio_152">
                                                <ul class="nav nav-pills tabs_system center" id="pills-tab"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-login-tab"
                                                            data-toggle="pill" href="#pills-login" role="tab"
                                                            aria-controls="pills-login" aria-selected="true"><i
                                                                class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-signup-tab" data-toggle=""
                                                            href="/register" role=""
                                                            aria-controls="pills-signup" aria-selected="false"><i
                                                                class="fas fa-user-plus mr-2"></i>Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="" id="">
                                                <div class="" id="" role=""
                                                    aria-labelledby="">
                                                    <div class="login-form">
                                                        <form method="POST" action="{{ route('login') }}"  id="login-card">
                                                            @csrf

                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <div class="input-with-icon">
                                                                    <input type="text"
                                                                        class="form-control @error('email') is-invalid @enderror"
                                                                        name="email" value="{{ old('email') }}"
                                                                        required autocomplete="email" autofocus>
                                                                    @error('email')
                                                                    {{-- <script>
                                                                        Swal.fire("Error", "{{ $message }}", "error");
                                                                    </script> --}}
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <div class="input-with-icon">
                                                                    <input type="password"
                                                                        class="form-control @error('password') is-invalid @enderror"
                                                                        name="password" required
                                                                        autocomplete="current-password">
                                                                    <i class="bi bi-lock"></i>
                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="eltio_ol9">
                                                                    <div class="eltio_k1">
                                                                        <input id="dd" class="checkbox-custom"
                                                                            name="dd" type="checkbox">
                                                                        <label for="dd"
                                                                            class="checkbox-custom-label">Remember
                                                                            Me</label>
                                                                    </div>
                                                                    <div class="eltio_k2">
                                                                        <a href="{{ route('password.request') }}">Lost Your Password?</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-md full-width pop-login">Login</button>
                                                            </div>

                                                            <p class=" mx-auto text-dark text-center">
                                                                Don't have an account?
                                                                <a href="./register" class="text-dark text-gradient font-weight-bold">Register</a>
                                                            </p>
                                                        </form>

                                                        <div class="d-none text-center" id="biometric-card">

                                                            
                                                                    <div class="info mb-4">
                                                                        <img style="width:180px;" class="avatar avatar-xxl img-rounded" alt="Image placeholder" id="user-image"
                                                                            src="{{ asset('assets/img/no-pics-placeholder.jpg') }}">
                                                                    </div>
                                                                    <span class="opacity-4 text-dark"> Welcome Back </span>
                                                                    <h4 class="mb-0"> <span class="font-weight-bolder  text-dark" id="user-name">User Name
                                                                        </span> </h4>
                                                                    <p class="mb-4  text-dark">Use your finger print or authenticated device to login.</p>
                                                                    <div class="mb-3 text-center">
                                                                        <a href="#"
                                                                            class="avatar avatar-lg rounded-circle border border-dark"
                                                                            id="finger-print-image">
                                                                            <img style="width:80px;" alt="Image placeholder" class="p-1 img-rounded"
                                                                                src="{{ asset('assets/img/fingerprint-ionic-authentication-android-computer-icons-png-favpng-44g6nMFmJ8dfbmJAeEAeZ6SWp.jpg') }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="text-center mb-2">
                                                                        <button type="button" class="btn btn-md full-width pop-login" style="color: white;"
                                                                            id="auth-button">Authenticate</button>
                                                                    </div>
                                                                    <div class="mb-2 position-relative text-center">
                                                                        <p
                                                                            class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                                                            or
                                                                        </p>
                                                                    </div>
                                                                    <div class="text-center">
                                                                        <button class="btn btn-link" type="button" id="logout">Logout</button>
                                                                    </div>
                            
                                                                   
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>

    <!-- ============================ Call To Action ================================== -->
    <section class="theme-bg call_action_wrap-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="call_action_wrap">
                        <div class="call_action_wrap-head">
                            <h3>Do You Have Questions ?</h3>
                            <span>You can request a call back.</span>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#autho-message"
                            class="btn btn-call_action_wrap">Call Me Back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer style-2">
        <div class="footer-middle">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <div class="footer_widget">
                            <img src="{{ asset('home-page-assets/img/ta-logo.png') }}" class="img-footer small mb-2" alt="" />

                            <p>Receive updates, new listings, discounts sent straignt in your inbox every month</p>
                            <div class="foot-news-last">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <div class="input-group-append">
                                        <button type="button"
                                            class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                            <ul class="inline_social">
                                <li><a href="#" class="fb" tabindex="-1"><i
                                            class="bi bi-facebook"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send/?phone=27647579638&text&type=phone_number&app_absent=0"
                                        class="ln" tabindex="-1"><i class="bi bi-whatsapp"></i></a></li>
                                <li><a href="#" class="ins" tabindex="-1"><i
                                            class="bi bi-instagram"></i></a></li>
                                <li><a href="#" class="tw" tabindex="-1"><i
                                            class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-8 ml-auto">
                        <div class="row">

                            <div class="col-lg-7 col-md-4 col-sm-9">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Contact</h4>
                                    <p>Phone :<br />
                                        +234 806 9578 636, +234 810 5446 372
                                    </p>
                                    <p>Email :<br />
                                        reservations@talentsapartments.com</p>
                                    <p>No 6 NASU street , Agbowo Ibadan Oyo State.</p>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-3 col-sm-3">
                                <div class="footer_widget">
                                    <h4 class="widget_title">Links</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Rooms</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">All rights reserved. © 2022 Talents Apartments. <a
                                href="https://edgdmedia.com">EDGD Media</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->


    <!-- Send Message -->
    <div class="modal fade" id="autho-message" tabindex="-1" role="dialog" aria-labelledby="authomessage"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="authomessage">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i
                        class="bi bi-x-square"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Call Me Back</h4>
                    <div class="login-form">
                        <form method="POST" action="/call-me-back" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">

                                <div class="input-with-icons">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Your Name" required="required">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="input-with-icons">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="required">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="input-with-icons">
                                    <input type="tel" class="form-control" name="phone"
                                        placeholder="Phone Number" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">Call Me
                                    Back</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i
            class="bi bi-arrow-up-short"></i></a>
    <a id="chatWA" class="chatWA" title="Whatsapp CHat"
        href="https://api.whatsapp.com/send/?phone=2348105446372&text&type=phone_number&app_absent=0"><i
            class="bi bi-whatsapp"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('home-page-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/slick.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/slider-bg.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('home-page-assets/js/custom.js') }}"></script>


    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    @yield('script')
    <script src="{{ asset('vendor/webauthn/webauthn.js') }}"></script>

    <script>
        // Getting Login Page Check if Biometrics is enabled for user
        $(document).ready(function() {

            var getLoginStatus = JSON.parse(localStorage.getItem("biometrics_status"))
           


            if (getLoginStatus && getLoginStatus.status == 'activated') {
                var userEmail = getLoginStatus.email;
                $("#biometric-card").removeClass('d-none');
                $("#login-card").addClass('d-none');
                $("#user-name").text(getLoginStatus.name);
                $("#user-image").attr('src', getLoginStatus.image);
                // alert('Activated')
            }


            $('#logout').click(function() {

                localStorage.removeItem("biometrics_status");
                location.reload()

            });

            $('#finger-print-image').click(function() {

                authLogin(userEmail);
            });

            $('#auth-button').click(function() {

                authLogin(userEmail);
            });


            const authLogin = (email) => {

                new WebAuthn({
                        loginOptions: '/webauthn/login/options',
                        login: '/webauthn/login',
                    }).login({
                        email: userEmail,
                    })
                    .then(response => {
                        console.log(response);
                        const requiredButtons = Swal.mixin({
                            customClass: {
                                confirmButton: 'btn bg-gradient-success',
                                cancelButton: 'btn bg-gradient-danger',
                                closeButton: 'btn bg-gradient-primary'
                            },
                            buttonsStyling: false
                        })
                        requiredButtons.fire({
                            title: 'Authenticated',
                            text: 'Login successful!',
                            icon: 'success',
                            showCloseButton: true,
                        });

                        location.assign('{{ request()->headers->get('referer') }}');

                    })
                    .catch(response => {
                        const requiredButtons = Swal.mixin({
                            customClass: {
                                confirmButton: 'btn bg-gradient-success',
                                cancelButton: 'btn bg-gradient-danger',
                                closeButton: 'btn bg-gradient-primary'
                            },
                            buttonsStyling: false,
                        })
                        requiredButtons.fire({
                            title: 'Sorry',
                            text: 'Something went wrong, try again!',
                            icon: 'error',
                            showCloseButton: true,
                        })
                        console.log(response);


                    })

            }

        });
    </script>

</body>

</html>
