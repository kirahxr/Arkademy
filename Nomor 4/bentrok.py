def to_infinity(params1):
    index=params1+1
    while 1:
        yield index
        index += 1

def isLowest(params1,params2):
    if params1 < params2:
        return params2
    else:
        return params1

def isBentrok(params1,params2):
    for i in to_infinity(isLowest(params1,params2)):
        if i % params1 == 0 and i % params2 == 0:
            print(i)
            break


isBentrok(4,6)
isBentrok(5,6)
